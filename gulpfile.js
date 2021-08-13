const { src, dest, series, parallel, watch } = require('gulp');
const autoprefixer = require('autoprefixer'),
  babel = require('gulp-babel'),
  concat = require('gulp-concat'),
  eslint = require('gulp-eslint'),
  exec = require('gulp-exec'),
  focus = require('postcss-focus'),
  imagemin = require('gulp-imagemin'),
  postcss = require('gulp-postcss'),
  stylelint = require('gulp-stylelint'),
  rename = require('gulp-rename'),
  sass = require('gulp-sass'),
  uglify = require('gulp-uglify');

const paths = {
  private: {
    styleSheets: {
      entryFile: 'resources/stylesheets/Styles.scss',
      files: [
        'resources/stylesheets/**/*.scss',
      ],
    },
    javaScripts: {
      files: [
        'resources/javascripts/**/*.js',
      ],
    },
    images: {
      files: [
        'resources/images/**/*',
      ],
    }
  },
  public: {
    styleSheets: 'public/stylesheets/',
    javaScripts: 'public/javascripts/',
    images: 'public/images/',
  },
};

/**
 * Function that catch errors and will
 * therefore prevent gulp to exit the watch
 * task as long as an on listener is set.
 */
function swallowError(error) {
  console.log(error.toString());
}

function lintStyleSheets() {
  return src(paths.private.styleSheets.files)
    .pipe(stylelint({
      reporters: [
        {
          formatter: 'string',
          console: true,
        }],
    }));
}

function processStyleSheets() {
  return src(paths.private.styleSheets.entryFile, {
    allowEmpty: true
  })
    .pipe(sass({
      outputStyle: 'compressed'
    }))
    .pipe(postcss([autoprefixer(), focus()]))
    .on('error', swallowError)
    .pipe(rename('combined.min.css'))
    .pipe(dest(paths.public.styleSheets))
    .pipe(exec('touch ' + paths.public.styleSheets + 'combined.min.css'));
}

function lintJavaScripts() {
  return src(paths.private.javaScripts.files)
    .pipe(eslint())
    .pipe(eslint.format())
    .pipe(eslint.failAfterError());
}

function processJavaScripts() {
  return src(paths.private.javaScripts.files)
    .pipe(babel({
      presets: ['@babel/preset-env'],
    }))
    .pipe(concat('combined.min.js'))
    .pipe(uglify({
      mangle: true,
      compress: true,
    }))
    .on('error', swallowError)
    .pipe(dest(paths.public.javaScripts))
    .pipe(exec('touch ' + paths.public.javaScripts + 'combined.min.css'));
}

function processImages() {
  return src(paths.private.images.files)
    .pipe(imagemin({
      optimizationLevel: 3,
      progressive: true,
      interlaced: true,
      svgoPlugins: {
        removeViewBox: true,
      },
    }))
    .pipe(dest(paths.public.images));
}

function watchFiles() {
  watch(paths.private.styleSheets.files, { ignoreInitial: false, usePolling: true }, series(lintStyleSheets, processStyleSheets));
  watch(paths.private.styleSheets.entryFile, { ignoreInitial: false, usePolling: true }, series(lintStyleSheets, processStyleSheets));
  watch(paths.private.javaScripts.files, { ignoreInitial: false, usePolling: true }, series(lintJavaScripts, processJavaScripts));
  watch(paths.private.images.files, { usePolling: true }, processImages);
}

exports.watch = watchFiles;
exports.default = parallel(
  series(
    lintJavaScripts,
    processJavaScripts
  ),
  series(
    lintStyleSheets,
    processStyleSheets
  ),
  processImages
);
