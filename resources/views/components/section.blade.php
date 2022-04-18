@php
    switch (count($blocks)) {
        case 1:
            $classes = "col-12";
            break;
        case 2:
            $classes = "col-md-6 col-xs-12";
            break;
        case 3:
            $classes = "col-md-4 col-xs-12";
            break;
        case 4:
            $classes = "col-md-3 col-sm-6 col-xs-12";
            break;
        default:
            break;
    }
@endphp
@if ($type == "full-width")
    <div class="full-width site-section">
@else
    <div class="container site-section">
@endif
    @if (count($blocks) > 0 && count($blocks) < 5)
        <div class="row">
            @foreach ($blocks as $data)
                <div class="{{$classes}}">
                    @include($data['block'], ['data' => $data])
                </div>
            @endforeach
        </div>
    @endif
</div>