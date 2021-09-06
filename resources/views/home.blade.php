<x-app>
    <header class="header">
        <img class="header__image" src="/images/camp.svg" alt="Zelt bei Nacht">
        <div class="header__search">
            <div class="header__search-inner">
                <input class="header__search-input " placeholder="Wo willst du schlafen?">
                <button class="header__search-button" type="submit">Search<i
                        class="fas fa-search icon--styled"></i></button>
            </div>
        </div>
    </header>
    <main class="main">
        <div class="main__inner">
            <x-gardens :gardens="$gardens" />
        </div>
    </main>
</x-app>
