<?php

namespace App\Http\Controllers;

use App\Mail\BlogCommentEmail;
use App\Mail\ContactUsEmail;
use App\Mail\RequestCallbackEmail;
use App\Models\Blog;
use App\Models\Callback;
use App\Models\Comment;
use App\Models\Contact;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    protected $email;

    public function __construct()
    {
        //$this->email = 'aas@auregagroup.com';
        $this->email = 'mail@cybernetics.me';
    }

    public function contactSubmit(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email:rfs,dns',
            'contact_number' => 'required',
            'message' => 'required',
        ]);
        try {
            $input = $request->all();
            Contact::create($input);
            Mail::to($this->email)->send(new ContactUsEmail($request));
        } catch (Exception $e) {
            return redirect()->route('success.message')->with("error", $e->getMessage());
        }
        return redirect()->route('success.message')->with("success", "We have recieved your message successfully. Our team will reach out you shortly.");
    }

    public function requestCallBack(Request $request)
    {
        $this->validate($request, [
            'email_mobile' => 'required',
        ]);
        try {
            $input = $request->all();
            Callback::create($input);
            Mail::to($this->email)->send(new RequestCallbackEmail($request));
        } catch (Exception $e) {
            return redirect()->route('success.message')->with("error", $e->getMessage());
        }
        return redirect()->route('success.message')->with("success", "We have recieved your callback request successfully. Our team will reach out you shortly.");
    }

    public function blogComment(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email:rfs,dns',
            'contact_number' => 'required',
            'comment' => 'required',
        ]);
        try {
            $blog = Blog::findOrFail(decrypt($request->blog_id));
            $input = $request->all();
            $input['blog_id'] = $blog->id;
            Comment::create($input);
            Mail::to($this->email)->send(new BlogCommentEmail($request, $blog));
        } catch (Exception $e) {
            return redirect()->route('success.message')->with("error", $e->getMessage());
        }
        return redirect()->route('success.message')->with("success", "Comments posted successfully.");
    }

    public function successMessage()
    {
        $title = "Aurega Accounting and Tax Advisory - Success Message";
        $keywords = "Accounting, Tax, VAT, Finance";
        $description = "Aurega Accounting and Tax Advisory";
        return view('web.message', compact('title', 'keywords', 'description'));
    }
}
