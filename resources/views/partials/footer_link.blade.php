@php
    $dcComics = config('menu_links.dcComics');
    $shop = config('menu_links.shop');
    $dc = config('menu_links.dc');
    $sites = config('menu_links.sites');
@endphp
<section class="footer_link">

    <div class="container">
        <div class="lista">
            <ul>
                <h4>dc comics</h4>
            @foreach ($dcComics as $item)
                <li>
                    <a href="#">{{$item['text']}}</a>
                </li>
            @endforeach
            </ul>
            <!-- another list -->
            <ul>
            <h4>shop</h4>
            @foreach ($shop as $item)
                <li>
                    <a href="#">{{$item['text']}}</a>
                </li>
            @endforeach
            </ul>
        </div>
<!-- another list -->
        <div class="lista">
            <ul>
            <h4>dc</h4>
            @foreach ($dc as $item)
                <li>
                    <a href="#">{{$item['text']}}</a>
                </li>
            @endforeach
            </ul>
        </div>
<!-- another list -->
        <div class="lista">
            <ul>
            <h4>sites</h4>
            @foreach ($sites as $item)
                <li>
                    <a href="#">{{$item['text']}}</a>
                </li>
            @endforeach
            </ul>
        </div>

        <img src="/img/dc-logo-bg.png" alt="logo">


    </div>

</section>
