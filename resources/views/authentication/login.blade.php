<x-layouts.app>
    <section class="login">
        <div class="card">
            <h1 class="title title--centered">Login</h1>
            <form class="form" action="/authenticate" method="POST" autocomple="off">
                @csrf
                <div class="input">
                    <label class="input__label" for="email">
                        Email
                    </label>
                    <input class="input__field" type="email" name="email" id="email" required value="{{ old('email') }}"
                        autocomple="off">
                </div>
                <div class="input">
                    <label class="input__label" for="password">
                        Password
                    </label>
                    <input class="input__field" type="password" name="password" id="password" required
                        value="{{ old('password') }}" autocomplete="new-password" a>
                </div>
                <button type="submit" class="button button--m button--full-width">Log In</button>
                @if ($errors->any())
                    <ul>
                        @foreach ($errors->all() as $error)
                            <p class="paragraph paragraph--error">{{ $error }}</p>
                        @endforeach
                    </ul>
                @endif
            </form>
        </div>
    </section>
</x-layouts.app>
