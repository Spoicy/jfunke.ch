<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactForm;

class Contact extends Controller
{
    /**
     * Process the contact information provided by the user.
     */
    public static function processContact(Request $request) {
        $data = new \stdClass();
        $data->text = $request->request->get('cMessage');
        $data->replyto = $request->request->get('cEmail');
        $data->firstname = $request->request->get('cFirstname');
        $data->lastname = $request->request->get('cLastname');
        $data->subject = $request->request->get('cSubject');
        try {
            Mail::to('contact@jfunke.ch')->send(new ContactForm($data));
            return redirect('/contact')->with('status', 1);
        } catch (\Exception $e) {
            return redirect('/contact')->with('status', 2);
        }
        
    }
}