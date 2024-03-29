@if ($data['type'] == 'home')
    <div class="block-banner">
        <div class="container inner-banner h-100 banner-{{$data['textdir'] ?? 'left'}}">
            <div class="main-text">
                <h1>{{$data['heading'] ?? 'Lorem ipsum'}}</h2>
                <p>{{$data['subtext'] ?? 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras semper.'}}</p>
            </div>
            <img src="{{$data['imgsrc']}}" alt="{{$data['imgalt'] ?? 'Banner'}}">
        </div>
    </div>
@else
    <div class="block-banner">
        <div class="inner-banner full-image overflow-hidden h-100">
            <img class="center-3d" src="{{$data['imgsrc']}}" alt="{{$data['imgalt'] ?? 'Banner'}}" name="banner-img">
        </div>
    </div>
@endif