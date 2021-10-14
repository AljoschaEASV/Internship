<x-layouts.app>
    <div class="gardens-list">
        @foreach ($gardens as $garden)
            <a class="link" href="{{ route('garden-details', ['garden' => $garden->id]) }}">
                <figure class="gardens-list__item">
                    <img class="gardens-list__item-image" src="{{ $garden->image }}" alt="A beautiful garden">
                    <figcaption class="gardens-list__item-content">
                        <h2 class="title"><b>{{ $garden->title }}</b></h2>
                        <small class="paragraph">{{ $garden->address->zip_code }} {{ $garden->address->city }},
                            {{ $garden->address->street }} {{ $garden->address->street_number }}</small>
                        <div class="garden-list__categories">
                            <div class="gardens-list__tents">
                                <h2 class="title">Tents you can place</h2>
                                @foreach ($garden->tentTypes as $type)
                                    <p class="paragraph">{{ $type->name }}</p>
                                @endforeach
                            </div>
                            <h2 class="title">Amenities</h2>
                            <div class="gardens-list__amenities-list">
                                @foreach ($garden->amenities as $amenity)
                                    <span class="gardens-list__amenities-list-item"><i
                                            class="fas fa-{{ $amenity->icon }}"></i></span>
                                @endforeach
                            </div>
                        </div>
                        <button class="button button--m">Choose</button>
                    </figcaption>
                </figure>
                @if (session()->has('success'))
                    <div class="message">
                        {{ session()->get('success') }}
                    </div>
                @endif
            </a>
        @endforeach
    </div>
</x-layouts.app>
