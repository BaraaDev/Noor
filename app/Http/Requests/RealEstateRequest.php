<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RealEstateRequest extends FormRequest
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
            'title'       => 'required|min:2|max:199',
            'content'     => 'required|min:2',
            'Area'        => 'required|min:2|max:199',
            'location_id' => 'required',
            'category_id' => 'required',
            'user_id'     => 'required',
            'status'      => 'required|in:0,1|numeric',
        ];
    }
}
