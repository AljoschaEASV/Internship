<x-layouts.app>
    <div class="profile">
        <aside>
            <img class="profile__picture" src="{{ $user->profile_picture }}" alt="">
            <h3 class="title title--xxl">{{ $user->first_name }} {{ $user->last_name }}</h3>
            <h4 class="title">Street</h4>
            <p class="paragraph">{{ $user->address->street }}</p>
            <h4 class="title">City</h4>
            <p class="paragraph">{{ $user->address->city }}</p>
        </aside>
        <section>
            <article class="profile__gardens">
                <h2 class="title title--xxl title--bold">Your gardens</h2>
                <p class="paragraph">Help us grow - Offer a spot in your garden!</p>
            </article>
            <article class="profile__tours">
                <h2 class="title title--xxl title--bold">Your tours</h2>
                <p class="paragraph">Beginn offering tours</p>
            </article>
        </section>
    </div>
</x-layouts.app>
