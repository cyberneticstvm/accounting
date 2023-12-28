<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsEmail;
use App\Mail\RequestCallbackEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function contactSubmit(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email:rfs,dns',
            'contact_number' => 'required',
            'message' => 'required',
        ]);
        Mail::to('mail@cybernetics.me')->send(new ContactUsEmail($request));
    }

    public function requestCallBack(Request $request)
    {
        $this->validate($request, [
            'email_mobile' => 'required',
        ]);
        Mail::to('mail@cybernetics.me')->send(new RequestCallbackEmail($request));
    }
}
