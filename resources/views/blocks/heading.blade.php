<div class="block-heading {{$data['textdir'] ?? 'left'}} {{$data['first'] ?? ''}}">
    <h2>{{$data['heading']}}</h3>
    @foreach ($data['text'] as $pg)
        <p>{!!$pg!!}</p>
    @endforeach
    @if (isset($data['files']))
        <ul class="list-files">
            @foreach ($data['files'] as $file)
                <li><a href="{{$file['path']}}" target="_blank" download><i class="fa-solid fa-file-{{$file['type']}}"></i><span>{{$file['name']}}</span></a></li>
            @endforeach
        </ul>
    @endif
</div>