<?php

namespace App\Http\Controllers;



use App\Models\Banner;
use App\Models\Explore;
use App\Models\Menu;
use App\Models\Submenu;
use App\Models\Support;

class IndexController extends Controller
{
    public function index()
    {


        $banner=Banner::first();
        $supports=Support::all();
        $explore=Explore::first();


        return view("welcome")->with(compact("banner","supports","explore"));

    }
    public function country(){
        return view("country");
    }

}
