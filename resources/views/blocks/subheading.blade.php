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
            <div class="main-text text-split">
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
        @elseif ($subdata['type'] == 'list')
            <div class="main-text">
                <h3>{{$subdata['subheading']}}</h3>
                <p>{{$subdata['text']}}</p>
                @foreach ($subdata['list'] as $topic => $items)
                    <h4>{{$topic}}</h4>
                    <ul>
                        @foreach ($items as $item)
                            <li>{{$item}}</li>
                        @endforeach
                    </ul>
                @endforeach
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