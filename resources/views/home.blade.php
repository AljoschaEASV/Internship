<x-layouts.app>
    <x-slot name="header">
        <header class="header">
            <img class="header__image" src="/images/camp.svg" alt="Zelt bei Nacht">
            <div class="header__search">
                <div class="header__search-inner">
                    <input class="header__search-input" placeholder="Wo willst du schlafen?">
                    <a href="gardens" class="link">
                        <button class="header__search-button" type="submit">Search<i
                                class="fas fa-search icon--styled"></i></button>
                    </a>
                </div>
            </div>
        </header>
    </x-slot>
    <x-gardens :gardens="$gardens" />
</x-layouts.app>
