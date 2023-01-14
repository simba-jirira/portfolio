<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
//            'first_name' => 'required',
//            'last_name' => 'required',
//            'email' => 'required|email',
//            'telephone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:11',
//            'subject' => 'required|min:10',
//            'service' => 'required',
//            'message' => 'required|min:150',
        'first_name' => '',
        'last_name' => '',
        'email' => '',
        'telephone' => '',
        'subject' => '',
        'service' => '',
        'message' => '',
        ];
    }
}
