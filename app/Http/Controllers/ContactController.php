<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactMail;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    public function contactUs(ContactFormRequest $request): RedirectResponse
    {


        try {
            $details = [
                'fullname' => $request->first_name.' '.$request->last_name,
                'email' => $request->email,
                'telephone' => $request->telephone,
                'subject' => $request->subject,
                'service' => $request->service,
                'messages' => $request->message,
            ];
            Mail::to('hello@simbajirira', 'simba jirira')->send(new ContactMail($details));
            return redirect()->route('contact')->with('success','Message Sent Thank You!.');
        } catch (Exception $e){
            Log::error('Email could not be sent',['error' => $e->getMessage(),
            ]);
            return redirect()->route('contact')->with('error', 'Failed to send email. Please try again.');
        }
    }
}
