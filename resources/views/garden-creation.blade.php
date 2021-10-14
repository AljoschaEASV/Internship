<x-layouts.app>
    <section class="register">
        <div class="card">
            <form action="/gardens" method="POST" autocomplete="off" enctype="multipart/form-data">
                <h2 class="title">You can register a garden here</h2>
                @csrf
                <div class="garden-card__create-garden">
                    <div class="input">
                        <label class="input__label" for="tent_type">
                            What tents can your location allow?
                        </label>
                        <select name="tent_types[]" id="tent_types" required multiple>
                            @foreach ($tentTypes as $tentType)
                                <option value="{{ $tentType->id }}">{{ $tentType->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="input">
                        <label class="input__label" for="title">
                            Title
                        </label>
                        <input class="input__field" type="text" name="title" id="title" required
                            value="{{ old('title') }}">
                    </div>
                    <div class="input">
                        <label class="input__label" for="subtitle">
                            Give a short explanation of the garden.
                        </label>
                        <input class="input__field" type="text" name="subtitle" id="subtitle" required
                            value="{{ old('subtitle') }}">
                    </div>
                    <div class="input">
                        <label class="input__label" for="image">
                            A picture - Really just for others to find it easier.
                        </label>
                        <input class="input__field" type="file" name="image" id="image" required>
                    </div>
                    <div class="input">
                        <label class="input__label" for="amenities">
                            What amenities do you want to offer?
                        </label>
                        <select name="amenities[]" id="amenities" required multiple>
                            @foreach ($amenities as $amenity)
                                <option value="{{ $amenity->id }}">{{ $amenity->icon }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="input">
                        <label class="input__label" for="street">
                            Street
                        </label>
                        <input class="input__field" type="text" name="street" id="street" required
                            value="{{ old('street') }}">
                    </div>
                    <div class="input">
                        <label class="input__label" for="street_number">
                        </label>
                        Streetnumber
                        <input class="input__field" type="text" name="street_number" id="street_number" required
                            value="{{ old('street_number') }}">
                    </div>
                    <div class="input">
                        <label class="input__label" for="zip_code">
                            Zipcode
                        </label>
                        <input class="input__field" type="text" name="zip_code" id="zip_code" required
                            value="{{ old('zip_code') }}">
                    </div>
                    <div class="input">
                        <label class="input__label" for="city">
                            City
                        </label>
                        <input class="input__field" type="text" name="city" id="city" required
                            value="{{ old('city') }}">
                    </div>
                    <div class="input">
                        <div class="country_code">
                            <label class="country_code" for="country_code">
                                Country Code like - DE, DK, EN, US
                            </label>
                            <input class="input__field" type="text" name="country_code" id="country_code" required
                                value="{{ old('country_code') }}">
                        </div>
                    </div>
                    @csrf
                    <button type="submit" class="button button--m">Submit</button>
                    @if ($errors->any())
                        <ul>
                            @foreach ($errors->all() as $error)
                                <p class="paragraph paragraph--error">{{ $error }}</p>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </form>
        </div>
    </section>
</x-layouts.app>
