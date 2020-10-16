<?php

namespace App\Models;

use App\Http\Controllers\ValidationController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSocial extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public static function make($user_id){


        $usersocial= new UserSocial;
        $data=ValidationController::user_socials();
        $usersocial['facebook']=$data['facebook'];
        $usersocial['twitter']=$data['twitter'];
        $usersocial['linkedin']=$data['linkedin'];
        $usersocial['instagram']=$data['instagram'];

        $usersocial['user_id']=$user_id;

        $usersocial->save();

    }
    public static function edit($user_id){


        $usersocial= new UserSocial;
        $data=ValidationController::user_socials();


        $usersocial['user_id']=$user_id;

        $usersocial->where('user_id',$user_id)->update($data);

    }
}
