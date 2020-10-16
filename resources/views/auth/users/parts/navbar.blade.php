
<header class="main-header dsh-header">
    <!-- logo-->
    <a href="{{url("/")}}" class="logo-holder"><img src="{{asset("storage/images/logo-two.png")}}" alt=""></a>
    <!-- logo end-->

    <!-- header opt -->
    <a href="{{route("add.advertising")}}" class="add-list color-bg">Add Listing <span><i class="fal fa-layer-plus"></i></span></a>
    <div class="cart-btn   show-header-modal" data-microtip-position="bottom" role="tooltip" aria-label="Your Wishlist"><i  style="color:#221668 !important;" class="fal fa-heart"></i><span class="cart-counter green-bg"></span> </div>
    <!-- header opt end-->
    <div class="header-user-menu">
        <div class="header-user-name">
            <span><img src="{{asset("storage/users")}}/{{auth()->user()->image}}" alt=""></span>
            <p style="color:#221668 !important;">
                  Hello , {{auth()->user()->name}}
            </p>

        </div>
        <ul>
            <li><a href="{{url("/user_panel/edit")}}"> Edit profile</a></li>
            <li><a href="{{route("add.advertising")}}"> Add Listing</a></li>
            <li><a href="https://townhub.kwst.net/dashboard-bookings.html">  Bookings  </a></li>
            <li><a href="https://townhub.kwst.net/dashboard-review.html"> Reviews </a></li>
            <li>   <a style="color: #fff" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    Log Out</a></li>
        </ul>
    </div>

    <!-- nav-button-wrap-->
    <div class="nav-button-wrap color-bg">
        <div class="nav-button">
            <span></span><span></span><span></span>
        </div>
    </div>
    <!-- nav-button-wrap end-->
    <!--  navigation -->



    <div class="nav-holder main-menu">
        <nav>
            <ul class="no-list-style">



                @foreach($menus as $menu)

                    <li>
                        <a style="color:#221668 !important;" href="">{{$menu->title}}
                            @if($menu->has_submenu)
                                <i class="fa fa-caret-down"></i>
                            @endif
                        </a>
                        @if($menu->has_submenu)

                            <ul>
                                @foreach($menu->submenus as $submenu)
                                    <li>
                                        <a style="color:#221668 !important;" href="">{{$submenu->title}}
                                            @if($submenu->has_submenu)
                                                <i class="fa fa-caret-down"></i>
                                            @endif
                                        </a>

                                        @if($submenu->has_submenu)
                                            <ul>
                                                @foreach($submenu->subsecs as $sub)
                                                    <li><a style="color:#221668 !important;" href="">{{$sub->title}}</a></li>
                                                @endforeach

                                            </ul>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                    @endif
                    <!--second level end-->
                    </li>


                @endforeach


            </ul>
        </nav>
    </div>
<!-- navigation  end -->

    <!-- wishlist-wrap-->
    <div class="header-modal novis_wishlist">
        <!-- header-modal-container-->
        <div class="header-modal-container scrollbar-inner fl-wrap" data-simplebar>
            <!--widget-posts-->
            <div class="widget-posts  fl-wrap">
                <ul class="no-list-style">
                    <li>
                        <div class="widget-posts-img"><a href="https://townhub.kwst.net/listing-single.html"><img src="{{asset("dashboard/10000000.png")}}" alt=""></a>
                        </div>
                        <div class="widget-posts-descr">
                            <h4><a href="https://townhub.kwst.net/listing-single.html">Iconic Cafe</a></h4>
                            <div class="geodir-category-location fl-wrap"><a href=""><i class="fas fa-map-marker-alt"></i> 40 Journal Square Plaza, NJ, USA</a></div>
                            <div class="widget-posts-descr-link"><a href="https://townhub.kwst.net/listing.html" >Restaurants </a>   <a href="https://townhub.kwst.net/listing.html">Cafe</a></div>
                            <div class="widget-posts-descr-score">4.1</div>
                            <div class="clear-wishlist"><i class="fal fa-times-circle"></i></div>
                        </div>
                    </li>
                    <li>
                        <div class="widget-posts-img"><a href="https://townhub.kwst.net/listing-single.html"><img src="{{asset("dashboard/20000000.png")}}" alt=""></a>
                        </div>
                        <div class="widget-posts-descr">
                            <h4><a href="https://townhub.kwst.net/listing-single.html">MontePlaza Hotel</a></h4>
                            <div class="geodir-category-location fl-wrap"><a href=""><i class="fas fa-map-marker-alt"></i> 70 Bright St New York, USA </a></div>
                            <div class="widget-posts-descr-link"><a href="https://townhub.kwst.net/listing.html" >Hotels </a>  </div>
                            <div class="widget-posts-descr-score">5.0</div>
                            <div class="clear-wishlist"><i class="fal fa-times-circle"></i></div>
                        </div>
                    </li>
                    <li>
                        <div class="widget-posts-img"><a href="https://townhub.kwst.net/listing-single.html"><img src="{{asset("dashboard/30000000.png")}}" alt=""></a>
                        </div>
                        <div class="widget-posts-descr">
                            <h4><a href="https://townhub.kwst.net/listing-single.html">Rocko Band in Marquee Club</a></h4>
                            <div class="geodir-category-location fl-wrap"><a href=""><i class="fas fa-map-marker-alt"></i>75 Prince St, NY, USA</a></div>
                            <div class="widget-posts-descr-link"><a href="https://townhub.kwst.net/listing.html" >Events</a> </div>
                            <div class="widget-posts-descr-score">4.2</div>
                            <div class="clear-wishlist"><i class="fal fa-times-circle"></i></div>
                        </div>
                    </li>
                    <li>
                        <div class="widget-posts-img"><a href="https://townhub.kwst.net/listing-single.html"><img src="{{asset("dashboard/40000000.png")}}" alt=""></a>
                        </div>
                        <div class="widget-posts-descr">
                            <h4><a href="https://townhub.kwst.net/listing-single.html">Premium Fitness Gym</a></h4>
                            <div class="geodir-category-location fl-wrap"><a href=""><i class="fas fa-map-marker-alt"></i> W 85th St, New York, USA</a></div>
                            <div class="widget-posts-descr-link"><a href="https://townhub.kwst.net/listing.html" >Fitness</a> <a href="https://townhub.kwst.net/listing.html" >Gym</a> </div>
                            <div class="widget-posts-descr-score">5.0</div>
                            <div class="clear-wishlist"><i class="fal fa-times-circle"></i></div>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- widget-posts end-->
        </div>
        <!-- header-modal-container end-->
        <div class="header-modal-top fl-wrap">
            <h4>Your Wishlist : <span><strong></strong> Locations</span></h4>
            <div class="close-header-modal"><i style="color: #fff" class="far fa-times"></i></div>
        </div>
    </div>
    <!--wishlist-wrap end -->
</header>







