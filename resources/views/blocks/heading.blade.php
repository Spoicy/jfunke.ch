<div class="block-heading {{$data['textdir']}}">
    <h2>{{$data['heading']}}</h3>
    @foreach ($data['text'] as $pg)
        <p>{!!$pg!!}</p>
    @endforeach
</div>