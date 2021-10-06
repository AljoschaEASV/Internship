<x-layouts.app>
    <div class="gardens-list">
        @foreach ($gardens as $garden)
            <a class="link" href="{{ route('gardens', ['garden' => $garden->id]) }}">
                <figure class="gardens-list__item">
                    <img class="gardens-list__item-image" src="{{ $garden->image }}" alt="random photo">
                    <figcaption class="gardens-list__item-content">
                        <h2 class="title"><b>{{ $garden->title }}</b></h2>
                        <small class="paragraph">{{ $garden->address->zip_code }} {{ $garden->address->city }},
                            {{ $garden->address->street }} {{ $garden->address->street_number }}</small>
                        <div class="garden-list__categories">
                            <div class="gardens-list__tents">
                                <h2 class="title">Zelte</h2>
                                @foreach ($garden->tentTypes as $type)
                                    <p class="paragraph">{{ $type->name }}</p>
                                @endforeach
                            </div>
                            <div class="gardens-list__amenities">
                                <h2 class="title">Ausstattung</h2>
                                @foreach ($garden->amenities as $amenity)
                                    <div class="gardens-list__amenities-list">
                                        <span class="gardens-list__amenities-list-item"><i
                                                class="fas fa-{{ $amenity->icon }}"></i>&nbsp;{{ $amenity->name }}</span>
                                        <span class="gardens-list__amenities-list-item"><i
                                                class="fas fa-{{ $amenity->icon }}"></i>&nbsp;{{ $amenity->name }}</span>
                                        <span class="gardens-list__amenities-list-item"><i
                                                class="fas fa-{{ $amenity->icon }}"></i>&nbsp;{{ $amenity->name }}</span>
                                        <span class="gardens-list__amenities-list-item"><i
                                                class="fas fa-{{ $amenity->icon }}"></i>&nbsp;{{ $amenity->name }}</span>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <button class="button button--m">Auswählen</button>
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
