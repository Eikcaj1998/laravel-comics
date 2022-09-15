@php
    $links = config('main_menu')
@endphp

<header class="container">
    <div id="header-flex">
        <figure>
            <img src={{asset('images/dc-logo.png')}} alt="logo DC">
        </figure>
        <nav>
            <ul>
                @foreach($links as $link)
                <li>
                <a 
                    href="{{route($link['route_name'])}}"
                    class="{{request()->routeIs($link['route_name'] ? 'active' : '')}}"> 
                    {{ $link['text'] }} 
                </a>
                </li>
            </ul>
        </nav>
    </div>
  </header>