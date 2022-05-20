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
        $fields = ['cMessage' => 'text', 'cEmail' => 'replyto', 'cFirstname' => 'firstname', 'cLastname' => 'lastname', 'cSubject' => 'subject'];
        $bannedChars = ['‮'];
        foreach ($fields as $key => $field) {
            $temp = $request->request->get($key);
            $temp = strip_tags($temp);
            $temp = str_replace($bannedChars, '', $temp);
            $data->$field = $temp;
        }
        try {
            Mail::to('contact@jfunke.ch')->send(new ContactForm($data));
            return redirect('/contact')->with('status', 1);
        } catch (\Exception $e) {
            return redirect('/contact')->with('status', 2);
        }
        
    }
}
