<!doctype html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>TentMyGarden - Wo Zelte Gärten finden</title>

    <!-- Scripts -->
    <script src="{{ asset('images/all.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
<header>
    <nav>
        <ul>
            <li><a href="#">TeMyGa (Home)</a></li>
            <li><a href="#">Vermieten</a></li>
            <li><a href="#">Mieten</a></li>
            <li><a href="#">Hilfe</a></li>
            <li><a href="#">Anmeldung</a></li>
            <li><a href="#">Selber Vermieten</a></li>

        </ul>
    </nav>
</header>
<h1>Only one h1 allowed & welcome</h1>
{{ $slot }}

<footer>
    <i></i>
    <section class="footer__follow">
        <h4>Folge uns für Inspiration</h4>
        <a href=""><img src="/images/facebook-logo.png" alt="Das Facebook Logo"></a>
        <a href=""><img src="/images/twitter-logo.png" alt="Das Twitter Logo"></a>
        <a href=""><img src="/images/instagram-logo.png" alt="Das Instagram Logo"></a>
    </section>

    <section class="footer__newsletter">
        <h4> Nix mehr verpassen </h4>
        <form>
            <input type="text" placeholder="Enter Email" name="mail">
            <input type="button" value="Subscribe" src="">
        </form>
    </section>

    <section class="footer__contact">
        <h4><a href="/impressum">Kontaktiere uns</a>
            <i class="fab fa-whatsapp"></i></h4>
        <a href=""><img src="/images/facebook-logo.png" alt="Das Instagram Logo"></a>
        <a href=""><img src="/images/whatsapp-logo.png" alt="Das Instagram Logo"></a>

    </section>
</footer>
</body>

</html>
