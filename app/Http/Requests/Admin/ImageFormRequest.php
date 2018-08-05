<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ImageFormRequest extends FormRequest
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
            'images' => 'required',
            'name' => 'unique:images,name',
        ];
    }
    public function messages()
    {
        return [
            'image.required'    => 'Please add an image!',
            'image.max'         => 'Image max size is 2MB',
            'name.unique'       => 'Image with that name already exists!'
        ];
    }
}
