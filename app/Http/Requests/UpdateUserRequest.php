<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
        $rules = [
            'firstname'=>['required','min:2','alpha'],
            'lastname'=>['required','min:2','alpha'],
            'email'=>['required','email'],
            
            
            'status'=>['required'],
        ];
        return $rules;
    }
}
