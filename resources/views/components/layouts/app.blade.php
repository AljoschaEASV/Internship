<!doctype html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>TentMyGarden - Wo Zelte Gärten finden</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
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
                    <a class="link link--light" href="#"><i class="fab fa-facebook fa-2x" alt="Das Facebook Logo"></i></a>
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
            <section class=" footer__section">
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
