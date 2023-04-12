<div class="block-card">
    <div class="card-content {{$data['class']}} {{$data['type']}}">
        @if ($data['type'] == 'list')
            <h3 class="list-heading">{!!str_replace("/", "/&#8203;", $data['heading'])!!}</h3>
            <div class="list-content">
                <ul>
                    @foreach ($data['list'] as $item)
                        <li>{{$item}}</li>
                    @endforeach
                </ul>
            </div>
        @else
            @if ($data['type'] == 'text')
                <h3>{{$data['heading']}}</h3>
            @else
                <i class="{{$data['heading']}}"></i>
            @endif
            <p>{{$data['text']}}</p>
        @endif
    </div>
</div>