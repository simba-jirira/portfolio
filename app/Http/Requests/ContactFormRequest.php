<?php

namespace App\Http\Requests;


use App\Rules\UKPhoneNumber;
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
            'first_name' => 'required|min:3',
            'last_name' => 'required|min:3',
            'email' => 'required|email',
            'telephone' =>[
                            'required',
                            'uk_phone'
                          ],
            'subject' => 'required|min:1',
            'service' => 'required',
            'message' => 'required|min:150',
        ];
    }
}
