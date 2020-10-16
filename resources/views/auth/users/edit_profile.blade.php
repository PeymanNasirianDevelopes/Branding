@extends('layouts.user')

@section('content')
                        <div class="dashboard-title fl-wrap">
                            <h3>Your Profile</h3>
                        </div>
                        <!-- profile-edit-container-->
                        <form action="{{url("/user_panel/edit")}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method("PUT")

                        <div class="profile-edit-container fl-wrap block_box">
                            <div class="custom-form">
                                <div class="row">

                                    <div class="col-sm-6">
                                        <label>First Name <i class="fal fa-user"></i></label>
                                        <input type="text" name="name" placeholder="name" value="{{auth()->user()->name}}"/>
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Second Name <i class="fal fa-user"></i></label>
                                        <input type="text" name="last_name" placeholder="last name" value="{{auth()->user()->last_name}}"/>
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Email Address<i class="far fa-envelope"></i>  </label>
                                        <input type="text" disabled placeholder="email" value="{{auth()->user()->email}}"/>
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Phone<i class="far fa-phone"></i>  </label>
                                        <input type="text" name="phone" placeholder="phone" value="{{auth()->user()->phone}}"/>
                                    </div>
                                    <div class="col-sm-6">
                                        <label> Address <i class="fas fa-map-marker"></i>  </label>
                                        <input type="text" name="address" placeholder="address" value="{{auth()->user()->address}}"/>
                                    </div>
                                    <div class="col-sm-6">
                                        <label> Website <i class="far fa-globe"></i>  </label>
                                        <input type="text" name="website" placeholder="web site" value="{{auth()->user()->website}}"/>
                                    </div>
                                </div>
                                <label> Notes</label>
                                <textarea cols="40" rows="3" name="about" placeholder="About Me" style="margin-bottom:20px;">{{auth()->user()->about}}</textarea>
                                <div class="clearfix"></div>
                                <label>Change Avatar</label>
                                <div class="clearfix"></div>
                                <div class="photoUpload">
                                    <span><i class="fal fa-image"></i> <strong>Add Photos</strong></span>
                                    <input name="image" type="file" class="upload">
                                </div>
                            </div>
                        </div>
                        <!-- profile-edit-container end-->
                        <div class="dashboard-title dt-inbox fl-wrap">
                            <h3>Your  Socials</h3>
                        </div>
                        <!-- profile-edit-container-->
                        <div class="profile-edit-container fl-wrap block_box">
                            <div class="custom-form">
                                <label>Facebook <i class="fab fa-facebook"></i></label>
                                <input type="text" name="facebook" placeholder="https://www.facebook.com/" value="{{auth()->user()->social->facebook}}"/>
                                <label>Twitter<i class="fab fa-twitter"></i>  </label>
                                <input type="text" name="twitter" placeholder="https://twitter.com/" value="{{auth()->user()->social->twitter}}"/>
                                <label>linkedin<i class="fab fa-linkedin"></i>  </label>
                                <input type="text" name="linkedin" placeholder="https://linkedin.com" value="{{auth()->user()->social->linkedin}}"/>
                                <label> Instagram <i class="fab fa-instagram"></i>  </label>
                                <input type="text" name="instagram" placeholder="https://www.instagram.com/" value="{{auth()->user()->social->instagram}}"/>
                                <button class="btn    color2-bg  float-btn" type="submit">Save Changes<i  style="color: #fff" class="fal fa-save"></i></button>
                            </div>
                        </div>
                        <!-- profile-edit-container end-->
                        </form>
@endsection
