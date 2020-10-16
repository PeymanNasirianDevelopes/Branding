<section class="explore-area two ptb-100">
    <div class="container">
        <div class="explore-item">
            <div class="section-title">
                <span class="sub-title">{{$explore->title}}</span>
                <h2>{{$explore->head}}</h2>
            </div>
            {!! $explore->content !!}
            <ul>
                <li>
                    <a class="left-btn" href="{{$explore->left_btn_link}}">
                       {{$explore->left_btn_name}}
                        <i class="flaticon-upload"></i>
                    </a>
                </li>
                <li>
                    <span>{{$explore->right_btn_name}}</span>
                    <a class="right-btn popup-youtube" href="{{$explore->right_btn_link}}">
                        <i class='bx bx-play'></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="explore-img">
            <img src="{{asset("storage/images/$explore->image")}}" alt="Explore">
        </div>
    </div>
</section>
