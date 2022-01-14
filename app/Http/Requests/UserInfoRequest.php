<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserInfoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'profile_img' => ['image', 'mimes:jpeg,png,jpg,gif'],
            'name' => ['required', 'string', 'max:255'],
            'car_name' => ['required', 'string'],
            'birthday' => ['required', 'string'],
            'blood_type' => ['required', 'string'],
            'hometown' => ['required', 'string'],
        ];
    }
}
