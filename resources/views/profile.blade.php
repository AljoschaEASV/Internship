<x-layouts.app>
    <div class="profile">
        <aside>
            <img class="profile__picture" src="{{ $user->profile_picture }}" alt="">
            <h3 class="title title--xxl">{{ $user->first_name }} {{ $user->last_name }}</h3>
            <h4 class="title">Straße</h4>
            <p class="paragraph">{{ $user->address->street }}</p>
            <h4 class="title">Stadt</h4>
            <p class="paragraph">{{ $user->address->city }}</p>
        </aside>
        <section>
            <article class="profile__gardens">
                <h2 class="title title--xxl title--bold">Deine Gärten</h2>
                <p class="paragraph">Lege jetzt deinen ersten Garten an!</p>
            </article>
            <article class="profile__tours">
                <h2 class="title title--xxl title--bold">Deine Touren </h2>
                <p class="paragraph">Fange an Touren anzubieten!</p>
            </article>
        </section>
    </div>
</x-layouts.app>
