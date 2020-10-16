<?php

namespace App\Http\Controllers;

use App\Models\JobCategory;
use App\Models\User;
use App\Models\UserSocial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view("auth.users.dashboard");
    }
    public function edit_profile()
    {
        return view("auth.users.edit_profile");
    }
    public function advertising()
    {
        $categories=JobCategory::all();
        return view("auth.users.add_advertising")->with(compact("categories"));
    }

    public function update(Request $request){
        $data=ValidationController::user_update();
        $user_id=auth()->user()->id;
if($user_image=$request->image){

    $image=user_images($user_image);
    $data['image']=$image;

}

if (UserSocial::where('user_id',$user_id)->first()){

    UserSocial::edit($user_id);
}
else{
    UserSocial::make($user_id);
}




        User::where('id',$user_id)->update($data);


        return redirect("user_panel/edit");



    }



    public function change_password()
    {
        return view("auth.users.change_password");
    }


}
