@extends('layouts.user')

@section('content')
                    <div class="col-md-9">
                        <div class="dashboard-title   fl-wrap">
                            <h3>Change Password</h3>
                        </div>
                        <form method="POST" action="{{ route('change.password') }}">
                            @csrf



                            @foreach ($errors->all() as $error)

                                <p class="text-danger">{{ $error }}</p>

                        @endforeach
                        <!-- profile-edit-container-->
                        <div class="profile-edit-container fl-wrap block_box">
                            <div class="custom-form">
                                <div class="pass-input-wrap fl-wrap">
                                    <label>Current Password</label>
                                    <input type="password" name="current_password" class="pass-input" placeholder="" value=""/>
                                    <span class="eye"><i class="far fa-eye" aria-hidden="true"></i> </span>
                                </div>
                                <div class="pass-input-wrap fl-wrap">
                                    <label>New Password</label>
                                    <input type="password" name="new_password" class="pass-input" placeholder="" value=""/>
                                    <span class="eye"><i class="far fa-eye" aria-hidden="true"></i> </span>
                                </div>
                                <div class="pass-input-wrap fl-wrap">
                                    <label>Confirm New Password</label>
                                    <input type="password" name="new_confirm_password" class="pass-input" placeholder="" value=""/>
                                    <span class="eye"><i class="far fa-eye" aria-hidden="true"></i> </span>
                                </div>
                                <button class="btn    color2-bg  float-btn" type="submit">Save Changes<i  style="color: #fff" class="fal fa-save"></i></button>
                            </div>
                        </div>
                        </form>
                        <!-- profile-edit-container end-->
@endsection
