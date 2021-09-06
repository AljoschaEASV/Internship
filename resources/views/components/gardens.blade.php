@props(['gardens'])

<div class="gardens">
    @foreach ($gardens as $garden)
        <a class="gardens__card" href="#">
            <img class="gardens__card-image" src="{{$garden->image}}">
            <div class="gardens__card-caption">
                <h4 class="title">Where you go: </h4>
                <p class="paragraph">{{ $garden->address->street }}</p>
            </div>
        </a>
    @endforeach
</div>
