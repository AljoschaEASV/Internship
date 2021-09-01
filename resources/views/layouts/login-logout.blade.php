@section('navigation')
    <nav>
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button>
                <span></span>
            </button>

            <div>
                <!-- Left Side Of Navbar -->
                <ul>

                </ul>

                <!-- Right Side Of Navbar -->
                <ul>
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li>
                                <a href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li>
                                <a href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li>
                            <a>
                                {{ Auth::user()->name }}
                            </a>

                            <div>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
@endsection
