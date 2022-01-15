<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserInfoRequest;
use App\Models\Following;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class UserController extends Controller
{
    //
    public function index() {
        return view('update');
    }

    public function modify(UserInfoRequest $req) {
        
        $user = User::find(Auth::user()->id);
        if(isset($req->profile_img)){
            $img = $req->profile_img;
            $profile_path = $img->storeAs("public", Auth::user()->email . ".jpeg", "public");
            $user->profile_path = $profile_path;
        }
        $user->name = $req->name;
        $user->car_name = $req->car_name;
        $user->hometown = $req->hometown;
        $user->year = $req->year;
        $user->month = $req->month;
        $user->blood_type = $req->blood_type;
        $user->point = $req->point;
        $user->save();
        return redirect()->route('home');
    }

    public function search(Request $request) {
        // dd($request->name);
        $users = [];
        if ($name = $request->name) {
            $users = User::where([
                    ['name', $name],
                    ['id', '<>', Auth::user()->id],
                ])->get();
            // dd($users);
        } else {
            $users = User::where('id', '<>', Auth::user()->id)->get();
        }
        return view('search', ["query" => $name, "users" => $users]);
    }

    public function detail($id) {
        $user = User::find($id);
        $following = Following::where([
            ["from", Auth::user()->id],
            ["to", $id]
            ])->first();
        return view('detail', ['user' => $user, 'following' => $following]);
    }

    public function qrcode() {
        return view('qrcode');
    }

    public function following(Request $req) {
        $following = new Following;
        $following->from = Auth::user()->id;
        $following->to = $req->id;
        $following->save();
        return redirect()->route('detail', ['id' => $req->id]);
    }

    public function unfollowing(Request $req) {
        $following = Following::where([
            ['to', $req->id],
            ['from', Auth::user()->id],
        ]);
        $following->delete();
        return redirect()->route('detail', ['id' => $req->id]);
    }

    public function follower() {
        $followers = Following::where('from', Auth::user()->id)->get();
        $users = [];
        foreach ($followers as $follower) {
            $users[] = User::find($follower->to);
        }
        
        return view('following_list', ["users" => $users]);
    }
}
