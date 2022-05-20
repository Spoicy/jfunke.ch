<div class="block-portfoliofull row">
    <div class="return col-12">
        <a href="/portfolio">← Return to Portfolio</a>
    </div>
    <div class="main-text col-md-6 col-xs-12">
        <h2>{{$data['name']}}</h2>
        @foreach ($data['description'] as $pg)
            <p>{{$pg}}</p>
        @endforeach
        @if (isset($data['initial']) || isset($data['finish']))
        <h3>Initial assessment</h3>
            @foreach ($data['initial'] as $pg)
                <p>{{$pg}}</p>
            @endforeach
            <h3>Finished product</h3>
            @foreach ($data['finish'] as $pg)
                <p>{{$pg}}</p>
            @endforeach
        @endif
        @if (isset($data['links']))
            @if (count($data['links']) > 1)
                <h3>Links</h3>
            @else
                <h3>Link</h3>
            @endif
            <div class="links">
                @foreach ($data['links'] as $item)
                    <a href="{{$item['link']}}">
                        @if (isset($item['linkname']))
                            {{$item['linkname']}}
                        @else
                            {{$item['link']}}
                        @endif
                    </a>
                    <br>
                @endforeach
            </div>
        @endif
    </div>
    <div class="main-carousels col-md-6 col-xs-12">
        <h3>Gallery</h3>
        <div id="carouselGallery" class="carousel slide" data-ride="carousel" data-interval="5000">
            <div class="carousel-inner">
                @php
                    $active = 'active';
                @endphp
                @foreach ($data['gallery'] as $item)
                    <div class="carousel-item {{$active}}">
                        <img class="d-block w-100" src="{{$item['imgsrc']}}" alt="{{$item['imgalt']}}">
                    </div>
                    @php
                        $active = '';
                    @endphp
                @endforeach
                <a class="carousel-control-prev" href="#carouselGallery" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselGallery" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>