@php
    $header_menu = config('menu_links.headerMenu')
@endphp
<header>

    <div class="container">
        <section class="logo">
            <img src="/img/dc-logo.png" alt="logo">
        </section>

        <section class="links">
            <ul>
                @foreach ($header_menu as $item)
                    <li >
                        <a  href="{{$item['href']}}">
                            {{$item['menu']}}
                        </a>
                    </li>
                @endforeach
            </ul>
        </section>
    </div>
</header>
