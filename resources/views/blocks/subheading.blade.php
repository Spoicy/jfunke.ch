<div class="block-subheading">
    @foreach ($data['subheadings'] as $subdata)
        <h3>{{$subdata['subheading']}}</h3>
        <p>{{$subdata['text']}}</p>
    @endforeach
</div>