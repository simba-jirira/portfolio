<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contactUs(ContactFormRequest $request)
    {
        //Storing Contact Data into the database
        Contact::create($request->all());
        return back()
            ->with('success',
                'We have received your message and
                 would like to thank you for writing
                  to us.');
    }
}
