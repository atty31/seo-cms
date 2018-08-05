<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class SubcategoryFormRequest
 * @package App\Http\Requests\Admin
 * @author Attila Naghi <naghi.attila@mail.com>
 */
class SubcategoryFormRequest extends FormRequest
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
     *
     * @return array
     */
    public function rules() : array
    {
        //todo add validation
        return [
            //
        ];
    }
}