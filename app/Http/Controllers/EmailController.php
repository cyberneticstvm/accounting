<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function contactsubmit(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email:rfs,dns',
            'contact_number' => 'required',
            'message' => 'required',
        ]);
        Mail::to('mail@cybernetics.me')->send(new ContactUsEmail($request));
    }
}
