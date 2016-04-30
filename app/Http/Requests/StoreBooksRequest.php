<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class StoreBooksRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; //false must login
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'price' => 'required',
            'typebooks_is' => 'required',
        ];
    }
    
    public function messages()
    {
        return [
           'title.required' => 'กรุณากรอกชื่อหนังสือ',
            'price.required' => 'กรุณากรอกราคา',
            'typebooks_is.required' => 'กรุณาเลือกหมวดหมู่หนังสือ',
        ];
    }
}
