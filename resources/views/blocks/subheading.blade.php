@foreach ($data['subheadings'] as $subdata)
    @php
        if (isset($subdata['textdir'])) {
            $textdir = 'sub-' . $subdata['textdir'];
        } else {
            $textdir = '';
        }
    @endphp
    <div class="block-subheading {{$textdir}}">
        @if ($subdata['type'] == 'img')
            <div class="main-text">
                <h3>{{$subdata['subheading']}}</h3>
                @foreach ($subdata['text'] as $pg)
                    <p>{!!$pg!!}</p>
                @endforeach
            </div>
            <div class="main-img">
                <div class="img-inner">
                    <img src="{{$subdata['imgsrc']}}" alt="{{$subdata['imgalt']}}" class="" name="subheading-img">
                </div>
            </div>
        @else
            <div class="main-text">
                <h3>{{$subdata['subheading']}}</h3>
                @foreach ($subdata['text'] as $pg)
                    <p>{!!$pg!!}</p>
                @endforeach
            </div>
        @endif
    </div>
@endforeach