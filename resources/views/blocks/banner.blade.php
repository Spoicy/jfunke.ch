{{-- TODO: Make mobile responsive --}}
<div class="block-banner">
    <div class="container h-100 banner-{{$data['textdir'] ?? 'left'}}">
        <div class="main-text">
            <h1>{{$data["heading"] ?? 'Lorem ipsum'}}</h2>
            <p>{{$data["subtext"] ?? 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras semper.'}}</p>
        </div>
        <img src="{{$data["imgsrc"]}}" alt="{{$data["imgalt"] ?? 'Banner'}}">
    </div>
</div>