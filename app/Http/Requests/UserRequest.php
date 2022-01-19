<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name'           => 'required|string|min:3|max:199',
            'email'          => 'required|string|email:rfc,dns,spoof,filter,strict|max:255|unique:users,email',
            'password'       => 'required|string|min:8', //Password::min(8)->mixedCase()->letters()->numbers()->symbols()->uncompromised()
            'phone'          => 'required|max:255|unique:users,phone',
            'location'       => 'required|string|max:255',
            'job'            => 'required|string|min:3|max:199',
            'status'        => 'required|in:0,1|numeric',
            'is_admin'        => 'required|in:user,admin|string',
        ];
    }
}
