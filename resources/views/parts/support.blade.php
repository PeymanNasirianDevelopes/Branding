<div class="support-area pb-100">
    <div class="container">
        @foreach($supports as $support)
            @if($loop->first)
        {!! $support->title !!}
            @endif
        @endforeach
        <div class="support-slider owl-theme owl-carousel">
            @foreach($supports as $support)
            <div class="support-item">
                <img src="{{asset("storage/images/$support->company_logo")}}" alt="{{$support->company_name}}">
            </div>
            @endforeach
        </div>
    </div>
</div>
