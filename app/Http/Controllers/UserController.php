<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserInfoRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function index() {
        return view('update');
    }

    public function modify(UserInfoRequest $req) {
        // dd($req->all());
        if(isset($req->profile_img)){
            
            $img = $req->profile_img;
            // dd($img);
            $profile_path = $img->storeAs("public", Auth::user()->email . ".jpeg", "public");
            // $profile_path = $img->store("/profile_img");
        } else {
            $profile_path = "profile_img/no-image.png";
        }

        $user = User::find(Auth::user()->id);
        $user->profile_path = $profile_path;
        $user->name = $req->name;
        $user->car_name = $req->car_name;
        $user->hometown = $req->hometown;
        $user->birthday = $req->birthday;
        $user->blood_type = $req->blood_type;
        $user->point = $req->point;
        $user->save();
        return redirect()->route('home');
    }
}
