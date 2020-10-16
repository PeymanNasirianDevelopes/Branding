<div class="navbar-area fixed-top">
    <!-- Menu For Mobile Device -->
    <div class="mobile-nav">
        <a href="https://templates.hibootstrap.com/jecto/default/index.html" class="logo">
            <img src="{{asset("storage/images/logo-thr.png")}}" alt="Logo">
        </a>
    </div>

    <!-- Menu For Desktop Device -->
    <div class="main-nav two">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="https://templates.hibootstrap.com/jecto/default/index.html">
                    <img src="{{asset("storage/images/logo-two.png")}}" alt="Logo">
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav">

              @foreach($menus as $menu)
                        <li class="nav-item">
                            @if($menu->comment)
                                <span class="tooltip-span @if($menu->id==5) two @endif">{{$menu->comment}}</span>
                            @endif
                            <a href="" class="nav-link dropdown-toggle">{{$menu->title}}
                                @if($menu->has_submenu)
                                <i class='bx bx-chevron-down'></i> @endif</a>
                            @if($menu->has_submenu)
                            <ul class="dropdown-menu">

                                @foreach($menu->submenus as $submenu)
                                <li class="nav-item">
                                    <a href="" class="nav-link dropdown-toggle">{{$submenu->title}}
                                        @if($submenu->has_submenu)
                                        <i class='bx bx-chevron-down'></i> @endif</a>
                                    @if($submenu->has_submenu)
                                    <ul class="dropdown-menu">
                                        @foreach($submenu->subsecs as $sub)
                                        <li class="nav-item">
                                            <a href="{{$sub->link}}" class="nav-link">{{$sub->title}}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                        @endif
                                </li>
                                @endforeach

                            </ul>
                            @endif
                        </li>



                        @endforeach


                    </ul>
                    @if(auth()->user())
                    <div  class="login-left user-show">
                        <div class="header-user-menu">

                            <div class="header-user-name">

                                <span><img src="{{asset("storage/users")}}/{{auth()->user()->image}}" alt=""></span>
                                <p style="color:#221668 !important; font-size: 16px;">
                                    Hello , {{auth()->user()->name}}
                                </p>


                            </div>

                            <ul>
                                <li><a href="{{url("/user_panel/edit")}}"> Edit profile</a></li>
                                <li><a href="{{route("add.advertising")}}"> Add Listing</a></li>
                                <li><a href="">  Bookings  </a></li>
                                <li><a href=""> Reviews </a></li>
                                <li><a href="{{ route('logout') }}"      onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Log Out</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="side-nav two">




                      <!-- header opt end-->

                          <a class="job-right" href="{{route("add.advertising")}}">
                              Post A Job
                              <i class='bx bx-plus'></i>
                          </a>
         @else
                            <div class="side-nav two">
                        <a style="cursor:pointer; " class="login-left hov-green show-reg-form modal-open avatar-img">

                            <div data-srcav="images/avatar/3.jpg"><i class="fal fa-user"></i>Sign In</div>
                        </a>
        <a class="job-right" href="https://templates.hibootstrap.com/jecto/default/post-a-job.html">
            Post A Job
            <i class='bx bx-plus'></i>
        </a>
                        @endif
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<div class="main-register-wrap modal">
    <div class="reg-overlay"></div>
    <div class="main-register-holder tabs-act">
        <div class="main-register fl-wrap  modal_main">
            <div class="main-register_title">Welcome to <span><strong style="color: #221668">Branding </strong> Website<strong>.</strong></span></div>
            <div style="text-align: center !important;" class="close-reg"><i class="fal fa-times"></i></div>
            <ul class="tabs-menu fl-wrap no-list-style">
                <li class="current"><a href="#tab-1"><i class="fal fa-sign-in-alt"></i> Login</a></li>
                <li><a href="#tab-2"><i class="fal fa-user-plus"></i> Register</a></li>
            </ul>
            <!--tabs -->
            <div class="tabs-container">
                <div class="tab">
                    <!--tab -->
                    <div id="tab-1" class="tab-content first-tab">
                        <div class="custom-form">
                            <form method="post" action="{{ route('login') }}" name="registerform">
                                @csrf
                                <label> Email Address <span>*</span> </label>
                                <input name="email" type="text" class="@error('email') is-invalid @enderror"  onClick="this.select()" value="{{ old('email') }}">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label >Password <span>*</span> </label>
                                <input name="password" type="password" class="@error('password') is-invalid @enderror"  onClick="this.select()" value="" >
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <button type="submit"  class="btn float-btn color2-bg"> Log In <i style="color: #fff !important;" class="fas fa-caret-right"></i></button>
                                <div class="clearfix"></div>
                                <div class="filter-tags">
                                    <input id="check-a3" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label for="check-a3">Remember me</label>
                                </div>
                            </form>

                            @if (Route::has('password.request'))
                                <div class="lost_password">
                                    <a href="#">Lost Your Password?</a>
                                </div>
                            @endif
                        </div>
                    </div>
                    <!--tab end -->
                    <!--tab -->
                    <div class="tab">
                        <div id="tab-2" class="tab-content tab-content-1">
                            <div class="custom-form">
                                <form method="post"  action="{{ route('register') }}"  name="registerform" class="main-register-form" id="main-register-form2">
                                   @csrf
                                    <div class="col-lg-5" style="padding: 0 !important;">
                                        <label > Name <span>*</span> </label>
                                        <input name="name" type="text" placeholder="Enter your Name"  onClick="this.select()" value="{{old("name")}}">
                                    </div>
                                    <div class="col-lg-7" style="padding-right: 0 !important;">
                                        <label >Last Name <span>*</span> </label>
                                        <input name="last_name" type="text"  placeholder="Enter your Last Name"  onClick="this.select()" value="{{old("last_name")}}">

                                    </div>

                                    <label>Email Address <span>*</span></label>
                                    <input name="email" type="text"  onClick="this.select()" placeholder="ex@example.com" value="{{old("email")}}">
                                    <div class="col-lg-6" style="padding: 0 !important;">
                                    <label >Password <span>*</span></label>
                                    <input name="password" type="password"   placeholder="8 Characters at Least" onClick="this.select()" value="" >
                                    </div>
                                    <div class="col-lg-6" style="padding-right: 0 !important;">
                                    <label >Confirm Password <span>*</span></label>
                                    <input name="password_confirmation" type="password"   placeholder="Retype Password" onClick="this.select()" value="" >
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="filter-tags ft-list">
                                        <input id="check-a" type="checkbox" name="check">
                                        <label for="check-a">I agree to the <a href="">Terms and Conditions</a></label>
                                    </div>
                                    <div class="clearfix"></div>
                                    <button type="submit"     class="btn float-btn color2-bg"> Register  <i style="color: #fff !important;" class="fas fa-caret-right"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--tab end -->
                </div>
                <!--tabs end -->
                <div style="text-align: center" class="log-separator fl-wrap"><span>or</span></div>
                <div style="text-align: center" class="soc-log fl-wrap">
                    <p>For faster login or register use your social account.</p>
                    <div class="col-lg-6">
                        <a href="{{ url('/auth/redirect/linkedin') }}" class="linkedin-log">  Linkedin <i class='bx bxl-linkedin-square'></i></a>
                    </div>

                    <div class="col-lg-6">
                        <a href="{{ url('auth/google') }}" class="google-log">  Google <i class='bx bxl-google-plus'></i></a>
                    </div>

                </div>

                <div class="wave-bg">
                    <div class='wave -one'></div>
                    <div class='wave -two'></div>
                </div>
            </div>
        </div>
    </div>
</div>
