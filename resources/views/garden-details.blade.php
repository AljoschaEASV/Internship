<x-layouts.app>
    <a class="link" href="/gardens">
        < Back to Gardens</a>
            <figure class="garden-detail">
                <img class="garden-detail__image" src="{{ $garden->image }}" alt="random photo">
                <figcaption class="garden-detail__caption">
                    <h2 class="title"><b>{{ $garden->title }}</b></h2>
                    <small class="paragraph">{{ $garden->address->zip_code }} {{ $garden->address->city }},
                        {{ $garden->address->street }} {{ $garden->address->street_number }}</small>
                    <br />
                    <p class="paragraph">Dein Host: {{ $garden->user->first_name }}
                        {{ $garden->user->last_name }}</p>
                    <h2 class="title">Zelte</h2>
                    @foreach ($garden->tentTypes as $tentType)
                        <p class="paragraph">{{ $tentType->name }}</p>
                    @endforeach
                    <h2 class="title">Ausstattung</h2>
                    @foreach ($garden->amenities as $amenity)
                        <span><i class="fas fa-{{ $amenity->icon }}"></i>&nbsp;{{ $amenity->name }}</span>
                        <span><i class="fas fa-{{ $amenity->icon }}"></i>&nbsp;{{ $amenity->name }}</span>
                        <span><i class="fas fa-{{ $amenity->icon }}"></i>&nbsp;{{ $amenity->name }}</span>
                        <span><i class="fas fa-{{ $amenity->icon }}"></i>&nbsp;{{ $amenity->name }}</span>
                    @endforeach
                </figcaption>
            </figure>
</x-layouts.app>
