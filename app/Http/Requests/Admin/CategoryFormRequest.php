<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class CategoryFormRequest
 * @package App\Http\Requests\Admin
 * @author Attila Naghi <naghi.attila@mail.com>
 */
class CategoryFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     * @return bool
     */
    public function authorize() : bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     * @return array
     */
    public function rules() : array
    {
        //todo Type validation
        return [
            'name'   => 'required|max:255|min:4',
            'status' => 'required|not_in:-1',  //dropdown validation
//            'type'   => 'required|not_in:-1',  //dropdown validation
        ];
    }

    /**
     * Display error messages
     * @return array
     */
    public function messages() : array
    {
        return [
            'name.required'    => 'Category name is required',
            'name.unique'      => 'The name of this category is already used',
            'status.required'  => 'Category status is required',
            'status.not_in'    => 'Please select a value for category status',
//            'type.required'    => 'Category status is required',
            'type.not_in'      => 'Please select a value for category status'
        ];
    }
}