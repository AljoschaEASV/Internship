FROM php:8.0-fpm-bullseye

# Define build arguments
ARG USER_ID
ARG GROUP_ID

# Define environment variables
ENV DOCUMENT_ROOT=/var/www/html/public
ENV USER_NAME=vvuser
ENV GROUP_NAME=vvuser
ENV USER_ID=$USER_ID
ENV GROUP_ID=$GROUP_ID
ENV USER_ID=${USER_ID:-1001}
ENV GROUP_ID=${GROUP_ID:-1001}

# Add group and user based on build arguments
RUN addgroup --gid ${GROUP_ID} ${GROUP_NAME}
RUN adduser --disabled-password --gecos '' --uid ${USER_ID} --gid ${GROUP_ID} ${USER_NAME}

# Set user and group of working directory
RUN chown -R vvuser:vvuser /var/www/html

# Set nginx document root
RUN mkdir ${DOCUMENT_ROOT}

# Update all packages
RUN apt-get update -y

# Install new packages
RUN apt-get install -y nginx

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql

# Add alias for artisan
RUN echo "alias artisan='php artisan'" >> /home/vvuser/.bashrc

# Set nginx and PHP-FPM user
RUN sed -ri -e "s!user www-data!user ${USER_NAME}!g" /etc/nginx/nginx.conf
RUN sed -ri -e "s!user = www-data!user = ${USER_NAME}!g" /usr/local/etc/php-fpm.d/www.conf
RUN sed -ri -e "s!group = www-data!group = ${GROUP_NAME}!g" /usr/local/etc/php-fpm.d/www.conf

# Manualy expose port 80 for outside access to nginx
EXPOSE 80

# Copy configuration to application container
COPY docker/application/nginx.conf /etc/nginx/sites-available/default
COPY docker/application/php.ini /usr/local/etc/php/php.ini

# Start nginx and PHP-FPM
CMD service nginx start && docker-php-entrypoint php-fpm
