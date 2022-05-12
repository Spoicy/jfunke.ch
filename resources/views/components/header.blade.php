{{-- TODO: Make mobile responsive --}}
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
    <div class="container d-flex">
        <img src="/img/logo.svg" alt="Logo">
        <nav class="d-md-flex d-none">
            @foreach ($links as $key => $data)
                @if ($key == $nav)
                    <a class="link-active" href="{{$data[0]}}" id="{{$key}}">{{$data[1]}}</a>
                @else
                    <a href="{{$data[0]}}" id="{{$key}}">{{$data[1]}}</a>
                @endif
            @endforeach
        </nav>
    </div>
</header>