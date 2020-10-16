<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidationController extends Controller
{


    public static function user_update(){
        return request()->validate([
            "phone"=>"string | between:4,100 | nullable ",
            "name"=>"string  | required ",
            "last_name"=>"string | required ",
            "address"=>"string | between:4,100 | nullable ",
            "website"=>"string | between:4,100 | nullable ",
            "about"=>"string | nullable ",

            "image"=>"image | mimes:jpg,jpeg,png | max:2000   ",

        ]);
    }

    public static function user_socials(){

        return request()->validate([
            "facebook"=>"string | nullable",
            "twitter"=>"string | nullable",
            "instagram"=>"string | nullable",
            "linkedin"=>"string | nullable",

        ]);
    }


}
