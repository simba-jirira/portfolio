<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Models\Contact;
use Illuminate\Database\QueryException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contactUs(ContactFormRequest $request): RedirectResponse
    {

        try {
            Contact::create($request->all());
            return redirect()->route('contact')->with('success','Message Sent Thank You!.');
        } catch (QueryException|\Exception $e){
            return redirect()->route('contact');
        }

        //Storing Contact Data into the database


        //returnback with a success message
//        return back()
//            ->with('success',
//                'We have received your message and
//                 would like to thank you for writing
//                  to us.');
    }
}
