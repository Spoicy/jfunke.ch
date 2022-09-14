{{-- TODO: Make mobile responsive --}}
<div class="block-offset offset-{{$data['offset']}} row">
    <div class="main-img col-lg-4 col-xs-12">
        <div class="img-inner overflow-hidden">
            <img class="center-3d" src="{{$data['imgpath']}}" alt="" name="offset-img" style="width: 100%;">
            @if (isset($data['imgcredit']))
                <span class="img-credit d-none">{{$data['imgcredit']}}</span>
            @endif
        </div>
    </div>
    <div class="main-text col-lg-8 col-xs-12">
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