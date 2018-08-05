<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class PagesFormRequest
 * @package App\Http\Requests\Admin
 * @author Attila Naghi <naghi.attila@mail.com>
 */
class PagesFormRequest extends FormRequest
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
        //todo check all validation needed and add it
        return [
            'url_name'   => 'required|max:255|min:4',
            'title'   => 'required|max:255|min:4',
//            'category_id' => 'required|not_in:-1',  //dropdown validation
        ];
    }
    /**
     * Display error messages
     * @return array
     */
    public function messages() : array
    {
        return [
            'url_name.required'     => 'Page name is required',
            'url_name.unique'       => 'The name of this page is already used',
            'title.required'    => 'Title name is required',
            'title.unique'      => 'The name of this title is already used',
        ];
    }
}