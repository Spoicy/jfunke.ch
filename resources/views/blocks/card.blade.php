<div class="block-card">
    <div class="card-content {{$data["class"]}}">
        @if ($data["type"] == "text")
            <h3>{{$data["heading"]}}</h3>
        @else
            <i class="fa-solid fa-{{$data["heading"]}}"></i>
        @endif
        <p>{{$data["text"]}}</p>
    </div>
</div>