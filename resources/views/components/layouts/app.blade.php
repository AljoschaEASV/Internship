<!doctype html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>TentMyGarden - Wo Zelte Gärten finden</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <nav class="nav">
        <div class="nav__inner flex">
            <div class="nav__desktop">
                <a class="nav__link" href="/">
                    <img class="nav__logo" src="/images/lion.svg" alt="Das Logo der Website.">
                </a>
                <div class="nav__dropdown">
                    <img class="nav__user" src="/images/guy.jpg" alt="Das Logo des Users.">
                    <div class="nav__dropdown-content">
                        <div class="nav__dropdown-content-inner">
                            <a class="nav__link" href="#">Profil</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nav__mobile">
                <a href="/" class="nav__link">
                    <i class="fa fa-home fa-2x"></i><br />
                    Home
                </a>
                <a href="/" class="nav__link nav__link--icon">
                    <i class="fa fa-user-circle fa-2x fa-c"></i><br />
                    User
                </a>
            </div>
        </div>
    </nav>
    {{ $header ?? '' }}
    <main class="main">
        <div class="main__inner">
            {{ $slot }}
        </div>
    </main>
    <footer class="footer">
        <div class="footer__inner">
            <section class="footer__section">
                <h4 class="footer__heading">Folge uns</h4>
                <div class="footer__section-items">
                    <a class="link link--light" href="#"><i class="fab fa-facebook fa-2x"
                            alt="Das Facebook Logo"></i></a>
                    <a class="link link--light" href="#"><i class="fab fa-twitter fa-2x" alt="Das Twitter Logo"></i></a>
                    <a class="link link--light" href="#"><i class="fab fa-instagram fa-2x"
                            alt="Das Instagram Logo"></i></a>
                </div>
            </section>
            <section class="footer__section footer__section--x2">
                <h4 class="footer__heading">Nichts mehr verpassen</h4>
                <form class="footer__section-items">
                    <input type="text" placeholder="Enter Email" class="footer__mail-input">
                    <button type="submit" class="button">Subscribe</button>
                </form>
            </section>
            <section class="footer__section">
                <h4 class="footer__heading">Kontaktiere uns</h4>
                <div class="footer__section-items">
                    <a class="link link--light" href="#"><i class="fab fa-facebook fa-2x"
                            alt="Das Facebook Logo"></i></a>
                    <a class="link link--light" href="#"><i class="fab fa-whatsapp fa-2x"
                            alt="Das WhatsApp Logo"></i></a>
                </div>
            </section>
        </div>
    </footer>
</body>

</html>
