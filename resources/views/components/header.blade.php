{{-- TODO: Make mobile responsive --}}
@php
    $links = [
        "hHome" => ["/", "Home"],
        "hAbout" => ["/about", "About"],
        "hPortfolio" => ["/portfolio", "Portfolio"],
        "hResume" => ["/resume", "Resume"],
        "hContact" => ["/contact", "Contact"],
    ];
    if (!isset($nav)) {
        $nav = '';
    }
@endphp
<header class="site-header bg-main">
    <a class="skip-nav" href="#main-content">Skip navgiation</a>
    <div class="container d-flex">
        <a class="logo" href="/">
            <img src="/img/logo.svg" alt="Logo">
        </a>
        <nav class="nav-desktop d-md-flex d-none">
            @foreach ($links as $key => $data)
                @if ($key == $nav)
                    <a class="link-active no-style" href="{{$data[0]}}" id="{{$key}}">{{$data[1]}}</a>
                @else
                    <a class="no-style" href="{{$data[0]}}" id="{{$key}}">{{$data[1]}}</a>
                @endif
            @endforeach
        </nav>
        <button class="d-md-none d-flex menu-open" id="moButton" name="moButton"><i class="fa-solid fa-bars"></i></button>
    </div>
    <nav class="nav-mobile" id="mPopout">
        <button class="menu-close" id="mcButton" name="mcButton"><i class="fa-solid fa-xmark"></i></button>
        @foreach ($links as $key => $data)
            @if ($key == $nav)
                <a class="link-active no-style btn btn-accent" href="{{$data[0]}}" id="{{$key}}">{{$data[1]}}</a>
            @else
                <a class="no-style btn btn-accent" href="{{$data[0]}}" id="{{$key}}">{{$data[1]}}</a>
            @endif
        @endforeach
    </nav>
    <div class="background-dim" id="bDim"></div>
</header>