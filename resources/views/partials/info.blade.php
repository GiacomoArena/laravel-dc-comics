@php
    $info_menu = config('menu_links.InfoMenu')
@endphp
<section class="info">
    <div class="container">
        <ul>
            @foreach ($info_menu as $info)
            <li>
                <a href="#"><img src="{{$info['src']}}" alt="{{$info['menu']}}">{{$info['menu']}}</a>
            </li>
            @endforeach
        </ul>
    </div>
</section>
