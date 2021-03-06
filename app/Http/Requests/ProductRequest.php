<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
        'srtParent' =>'required',
        'txtName' => 'required|unique:products,name',
       'fImages' =>'required|image'
        ];
    }
    public function messages () {
         return [
        'srtParent.required' => 'please choose category',
        'txtName.required' => 'please enter name product',
        'txtName.unique' => 'product name is exist',
        'fImages.required' => 'please choose images',
        'fImages.image' => ' this file is not image'
        ];
    }
}
