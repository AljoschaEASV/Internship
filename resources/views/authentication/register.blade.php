<x-layouts.app>
    <section class="register">
        <div class="card">
            <form class="form" action="/users" method="POST" autocomplete="off" enctype="multipart/form-data">
                @csrf
                <div class="input">
                    <label class="input__label" for="gender_id">
                        What is your gender?
                    </label>
                    <select class="select" name="gender_id" id="gender_id" value="{{ old('gender_id') }}">
                        <option selected disabled>Choose</option>
                        @foreach($genders as $gender)
                            <option value="{{ $gender->id }}">{{ ucfirst($gender->name) }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="input">
                    <label class="input__label" for="profile_picture">
                        Profile Picture
                    </label>
                    <input class="input" type="file" name="profile_picture" id="profile_picture" required>
                </div>
                <div class="input">
                    <label class="input__label" for="first_name">
                        First Name
                    </label>
                    <input class="input__field" type="text" name="first_name" id="first_name" required
                        value="{{ old('first_name') }}">
                </div>
                <div class="input">
                    <label class="input__label" for="last_name">
                        Last Name
                    </label>
                    <input class="input__field" type="text" name="last_name" id="last_name" required
                        value="{{ old('last_name') }}">
                </div>
                <div class="input">
                    <label class="input__label" for="date_of_birth">Birthday:</label>
                    <input class="input__field" type="date" id="date_of_birth" name="date_of_birth">
                </div>
                <div class="input">
                    <label class="
                        input__label" for="email">
                        Email
                    </label>
                    <input class="input__field" type="email" name="email" id="email" required
                        value="{{ old('email') }}" autocomple="off">
                </div>
                <div class="input">
                    <label class="input__label" for="password">
                        Password
                    </label>
                    <input class="input__field" type="password" name="password" id="password" required
                        value="{{ old('password') }}">
                </div>
                <div class="input">
                    <label class="input__label" for="password_confirmation">
                        Confirm password
                    </label>
                    <input class="input__field" type="password" name="password_confirmation"
                        id="password_confirmation" required>
                </div>
                <div class="input">
                    <label class="input__label" for="street">
                        Street
                    </label>
                    <input class="input__field" type="text" name="street" id="street" required
                        value="{{ old('street') }}">
                </div>
                <div class="input">
                    <label class="input__label" for="zip_code">
                        Zip Code
                    </label>
                    <input class="input__field" type="text" name="zip_code" id="zip_code" required
                        value="{{ old('zip_code') }}">
                </div>
                <div class="input">
                    <label class="input__label" for="city">
                        city
                    </label>
                    <input class="input__field" type="text" name="city" id="city" required
                        value="{{ old('city') }}">
                </div>
                <div class="input__street-number">
                    <label class="input__label" for="street_number">
                    </label>
                    Street Number

                    <input class="input__field" type="text" name="street_number" id="street_number" required
                        value="{{ old('street_number') }}">
                </div>
                @if ($errors->any())
                    <ul>
                        @foreach ($errors->all() as $error)
                            <p class="paragraph paragraph--error">{{ $error }}</p>
                        @endforeach
                    </ul>
                @endif
                <button type="submit" class="button button--m">Submit</button>
            </form>
        </div>
    </section>
</x-layouts.app>
