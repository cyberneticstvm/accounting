<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsEmail;
use App\Mail\RequestCallbackEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    protected $email;

    public function __construct()
    {
        $this->email = 'mail@cybernetics.me'; //'aas@auregagroup.com';
    }

    public function contactSubmit(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email:rfs,dns',
            'contact_number' => 'required',
            'message' => 'required',
        ]);
        Mail::to($this->email)->send(new ContactUsEmail($request));
        return redirect()->route('success.message')->with("success", "We have recieved your message successfully. Our team will reach out you shortly.");
    }

    public function requestCallBack(Request $request)
    {
        $this->validate($request, [
            'email_mobile' => 'required',
        ]);
        Mail::to($this->email)->send(new RequestCallbackEmail($request));
        return redirect()->route('success.message')->with("success", "We have recieved your callback request successfully. Our team will reach out you shortly.");
    }

    public function successMessage()
    {
        $title = "Aurega Accounting and Tax Advisory - Success Message";
        $keywords = "Accounting, Tax, VAT, Finance";
        $description = "Aurega Accounting and Tax Advisory";
        return view('web.message', compact('title', 'keywords', 'description'));
    }
}
