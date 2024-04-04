<?php

namespace App\Http\Controllers;

use App\Mail\BlogCommentEmail;
use App\Mail\ContactUsEmail;
use App\Mail\LeadFormEmail;
use App\Mail\RequestCallbackEmail;
use App\Models\Blog;
use App\Models\Callback;
use App\Models\Comment;
use App\Models\Contact;
use App\Models\Lead;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    protected $email;

    public function __construct()
    {
        $this->email = 'aas@auregagroup.com';
        //$this->email = 'mail@cybernetics.me';
    }

    public function contactSubmit(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email:rfs,dns',
            'contact_number' => 'required|numeric',
            'message' => 'required',
            'answer' => 'required',
        ]);
        try {
            if ($request->answer != ($request->num1 + $request->num2)) :
                throw new Exception("Validation Failed!");
            else :
                $input = $request->all();
                Contact::create($input);
                Mail::to($this->email)->send(new ContactUsEmail($request));
            endif;
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
            'answer' => 'required',
        ]);

        try {
            if ($request->answer != ($request->num1 + $request->num2)) :
                throw new Exception("Validation Failed!");
            else :
                $blog = Blog::findOrFail(decrypt($request->blog_id));
                $input = $request->except(array('num1', 'num2', 'answer', 'op'));
                $input['blog_id'] = $blog->id;
                $input['status'] = 'pending';
                $owner = Comment::create($input);
                Mail::to($this->email)->send(new BlogCommentEmail($owner));
            endif;
        } catch (Exception $e) {
            return redirect()->route('success.message')->with("error", $e->getMessage());
        }
        return redirect()->route('success.message')->with("success", "Comments posted successfully.");
    }

    public function submitLanding(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email:rfs,dns',
            'mobile' => 'required',
        ]);
        $input = $request->all();
        try {
            Lead::create($input);
            Mail::to($this->email)->send(new LeadFormEmail($request));
        } catch (Exception $e) {
            return redirect()->route('success.message')->with("error", $e->getMessage());
        }
        return redirect()->route('success.message')->with("success", "Thank You! We have received your message successfully. We will get in touch with you shortly.");
    }

    public function successMessage()
    {
        $title = "Aurega Accounting and Tax Advisory - Success Message";
        $keywords = "Accounting, Tax, VAT, Finance";
        $description = "Aurega Accounting and Tax Advisory";
        return view('web.message', compact('title', 'keywords', 'description'));
    }
}
