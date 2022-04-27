{{-- TODO: Make mobile responsive --}}
<div class="block-offset offset-{{$data['offset']}} row">
    <div class="main-img col-md-4 col-xs-12">
        <div class="img-inner overflow-hidden">
            <img class="center-y" src="{{$data['imgpath']}}" alt="">
        </div>
    </div>
    <div class="main-text col-md-8 col-xs-12">
        <div class="text-outer d-flex">
            <div class="text-inner">
                <h3>{{$data['heading']}}</h3>
                <p>{{$data['text']}}</p>
                @isset($data['button'])
                    <a href="{{$data['link'] ?? '#'}}" class="btn btn-accent anim-hover">{{$data['button']}}</a>
                @endisset
            </div>
        </div>
    </div>
</div>