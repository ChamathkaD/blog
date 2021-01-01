<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UpdateProfile extends FormRequest
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
            'firstname' => ['required', 'string','alpha', 'max:50'],
            'lastname' => ['required', 'string', 'alpha', 'max:50'],
            'email' => ['required',
                'string',
                'email',
                'max:75',
                Rule::unique('users', 'email')->ignore(Auth::id()),

                ],
            'bio' => ['required', 'string'],
           'image' => ['mimes:jpeg,gif,png,svg,ico,jpg'],
        ];
    }

    public function messages()
    {
       return [
         'firstname.required' => 'please enter your name',
       ];
    }
    /*public function attributes()
    {
        return [
            'image' => 'User Image',

        ];
    }*/
}
