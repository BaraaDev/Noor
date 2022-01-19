<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name'          => 'required|min:3|max:199|string',
            'phone'         => 'required|min:9|max:30||regex:/(01)[0-9]{9}/',
            'mail'          => 'required|min:8|max:199|email:rfc,dns,spoof,filter,strict',
            'subject'       => 'required|min:6|max:199|string',
            'message'       => 'required|min:10|max:280|string',
        ];
    }
}
