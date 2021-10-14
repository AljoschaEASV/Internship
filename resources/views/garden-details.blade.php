<x-layouts.app>
    <a class="link" href="/gardens">
        < Back to Gardens</a>
            <figure class="garden-detail">
                <img class="garden-detail__image" src="{{ $garden->image }}" alt="A beautiful garden">
                <figcaption class="garden-detail__caption">
                    <h2 class="title"><b>{{ $garden->title }}</b></h2>
                    <small class="paragraph">{{ $garden->address->zip_code }} {{ $garden->address->city }},
                        {{ $garden->address->street }} {{ $garden->address->street_number }}</small>
                    <br />
                    <p class="paragraph">Host: {{ $garden->user->first_name }}
                        {{ $garden->user->last_name }}</p>
                    <h2 class="title">Tents you can place here</h2>
                    @foreach ($garden->tentTypes as $tentType)
                        <p class="paragraph">{{ $tentType->name }}</p>
                    @endforeach
                    <h2 class="title">Amenities</h2>
                    <div class="gardens-list__amenities-list">
                        @foreach ($garden->amenities as $amenity)
                            <span class="gardens-list__amenities-list-item"><i
                                    class="fas fa-{{ $amenity->icon }}"></i></span>
                        @endforeach
                    </div>
                </figcaption>
            </figure>
</x-layouts.app>
