<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IconRequest extends FormRequest
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
            'title'         => 'required|min:3|max:199|string',
            'text'          => 'required|min:3|max:500|string',
            'icon'          => 'required|max:199|string',
            'user_id'       => 'required',
            'status'        => 'required|in:0,1|numeric',
        ];
    }
}
