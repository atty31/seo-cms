<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class FolderFormRequest extends FormRequest
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
            'name'   => 'required|max:255|min:4',
            'description' => 'required|not_in:-1',  //dropdown validation
        ];
    }
    public function messages()
    {
        return [
            'name.required'    => 'Folder name is required',
            'name.unique'      => 'The name of this folder is already used',
        ];
    }
}
