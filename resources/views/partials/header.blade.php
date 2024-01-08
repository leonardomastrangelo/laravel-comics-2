
<header>
    <div id="top-header">
        <div class="container d-flex justify-content-end">
            <span>dc power visa</span>
            <span>additional sites <i class="fa-solid fa-caret-down"></i></span>
        </div>
    </div>
    <nav class="container d-flex justify-content-between py-3">
        <a href="{{route('home')}}">
            <img 
            src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo"
            class="d-block">
        </a>
        <ul>
            <li>
                <a href="#">
                    characters
                </a>
            </li>
            <li>
                <a href="{{route('comics.index')}}" class="{{(Route::currentRouteName() == 'comics.index') ? 'active' : ''}}">
                    comics
                </a>
                @if (Route::currentRouteName() == 'comics.index')
                <div class="active-bar">
                </div>
                @endif
            </li>
            <li>
                <a href="#" >
                    movies
                </a>
            </li>
            <li>
                <a href="#">
                    tv
                </a>
            </li>
            <li>
                <a href="#">
                    games
                </a>
            </li>
            <li>
                <a href="#">
                    collectibles
                </a>
            </li>
            <li>
                <a href="#">
                    videos
                </a>
            </li>
            <li>
                <a href="#">
                    fans
                </a>
            </li>
            <li>
                <a href="#">
                    news
                </a>
            </li>
            <li>
                <a href="#">
                    shop
                </a>
            </li>
        </ul>
        <div class="input-group d-flex align-items-center">
            <input type="text" class="form-control"
            placeholder="Search">
            <span class="input-group-text border-0">
                <i class="fa-solid fa-magnifying-glass"></i>
            </span>
        </div>
    </nav>
</header>