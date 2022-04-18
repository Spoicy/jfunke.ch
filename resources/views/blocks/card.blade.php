<div class="block-card">
    <div class="card-content {{$data["class"]}}">
        @if ($data["type"] == "text")
            <h3>{{$data["header"]}}</h3>
        @else
            <i class="fa-solid fa-{{$data["header"]}}"></i>
        @endif
        <p>{{$data["text"]}}</p>
    </div>
</div>