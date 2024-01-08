@php
    $footer_menu = config('comics.footer_links')
@endphp

<footer>
    <div class="container d-flex justify-content-between align-items-center">
        <div>
            <button>
                sign-up now!
            </button>
        </div>

        <ul>
            <li>
                <a href="#">
                    follow us
                </a>
            </li>
            @foreach ($footer_menu as $link)
            <li>
                <a href="#">
                    <img src="/img/{{$link}}" alt="">
                </a>
            </li>
            @endforeach
        </ul>
    </div>
</footer>