<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'profile_img' => ['image', 'mimes:jpeg,png,jpg,gif'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'car_name' => ['required', 'string'],
            'year' => ['required'],
            'month' => ['required'],
            'blood_type' => ['required', 'regex:/(A|B|AB|O)/'],
            'hometown' => ['required', 'string'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        if(isset($data["profile_img"])){
            $img = $data["profile_img"];
           $profile_path = $img->storeAs("profile_img", $data['email'] . ".jpeg", "public");
        } else {
            $profile_path = "profile_img/no-image.png";
        }
        return User::create([
            'profile_path' => $profile_path,
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'car_name' => $data["car_name"],
            'year' => $data["year"],
            'month' => $data["month"],
            'blood_type' => $data["blood_type"],
            'hometown' => $data["hometown"],
            'point' => $data["point"],
        ]);
    }
}
