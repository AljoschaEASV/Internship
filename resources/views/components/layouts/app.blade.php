<!doctype html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>TentMyGarden - Where tents find gardens</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <nav class="nav">
        <div class="nav__inner flex">
            <div class="nav__desktop">
                <a class="nav__link" href="/">
                    <img class="nav__logo" src="/images/logo.svg" alt="Das Logo der Website.">
                </a>
                <div class="nav__dropdown">
                    @guest
                        <i class="nav__user fa fa-user"></i>
                    @endguest
                    @auth
                        <img class="nav__user nav__profile-picture" src="{{ auth()->user()->profile_picture }}"
                            alt="Das Logo des Users.">
                    @endauth
                    <div class="nav__dropdown-content">
                        <div class="nav__dropdown-content-inner">
                            @auth
                                <a class="nav__link" href="/users/{{ Auth::id() }}">Profile</a>
                                <a class="nav__link" href="/gardens/create">Create Garden</a>
                                <a class="nav__link" href="/logout">Logout</a>
                            @endauth
                            @guest
                                <a class="nav__link" href="/register">Register</a>
                                <a class="nav__link" href="/login">Login</a>
                            @endguest
                        </div>
                    </div>
                </div>
            </div>
            <div class="nav__mobile">
                <a href="/" class="nav__link">
                    <i class="fa fa-home fa-2x"></i><br />
                    Home
                </a>
                @guest
                    <a href="/register" class="nav__link nav__link--icon">
                        <i class="fa fa-user-circle fa-2x fa-c"></i><br />
                        User
                    </a>
                @endguest
                @auth
                    <a class="nav__link nav__link--icon" href="/users/{{ Auth::id() }}">
                        <i class="fa fa-user-circle fa-2x fa-c"></i><br />
                        User
                    </a>
                @endauth
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
                <h4 class="footer__heading">Follow us</h4>
                <div class="footer__section-items">
                    <a class="link link--light link--bold" href="#"><i class="fab fa-facebook fa-2x"
                            alt="Das Facebook Logo"></i></a>
                    <a class="link link--light link--bold" href="#"><i class="fab fa-twitter fa-2x"
                            alt="Das Twitter Logo"></i></a>
                    <a class="link link--light link--bold" href="#"><i class="fab fa-instagram fa-2x"
                            alt="Das Instagram Logo"></i></a>
                </div>
            </section>
            <section class="footer__section footer__section--x2">
                <h4 class="footer__heading">Dont miss out</h4>
                <form class="footer__section-items">
                    <input type="text" placeholder="Enter Email" class="input__field">
                    <button type="submit" class="button">Subscribe</button>
                </form>
            </section>
            <section class="footer__section">
                <h4 class="footer__heading">Contact us</h4>
                <div class="footer__section-items">
                    <a class="link link--light link--bold" href="#"><i class="fab fa-facebook fa-2x"
                            alt="Das Facebook Logo"></i></a>
                    <a class="link link--light link--bold" href="#"><i class="fab fa-whatsapp fa-2x"
                            alt="Das WhatsApp Logo"></i></a>
                </div>
            </section>
        </div>
    </footer>
    @if (session()->has('success'))
        <div class="message">
            {{ session()->get('success') }}
        </div>
    @endif
</body>

</html>
