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
            'first_name' => 'required|min:3|max:125',
            'last_name' => 'required|min:3|max:125',
            'email' => 'required|email:rfc,dns,spoof,filter',
            'telephone' =>['required', new UKPhoneNumber],
            'subject' => 'required',
            'message' => 'required|min:150|max:255',
        ];
    }
}
