@props(['gardens'])

<div class="gardens">
    @foreach ($gardens as $garden)
        <a class="gardens__card" href="{{ route('garden-details', ['garden' => $garden->id]) }}">
            <img class="gardens__card-image title--white" src="{{ $garden->image }}" alt="A beautiful garden">
            <div class="gardens__card-caption">
                <h4 class="title--white">Where you go:</h4>
                <p class="paragraph--white">{{ $garden->address->street }}</p>
            </div>
        </a>
    @endforeach
</div>
