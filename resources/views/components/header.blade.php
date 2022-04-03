@php
    $links = [
        "hHome" => ["/", "Home"],
        "hAbout" => ["/about", "About"],
        "hPortfolio" => ["/portfolio", "Portfolio"],
        "hResume" => ["/resume", "Resume"],
        "hContact" => ["/contact", "Contact"],
    ];
@endphp
<header class="site-header bg-main">
    <img src="img/logo.svg" alt="Logo">
    <nav>
        @foreach ($links as $key => $data)
            @if ($key == $nav)
                <a class="link-active" href="{{$data[0]}}" id="{{$key}}">{{$data[1]}}</a>
            @else
                <a href="{{$data[0]}}" id="{{$key}}">{{$data[1]}}</a>
            @endif
        @endforeach
    </nav>
</header>