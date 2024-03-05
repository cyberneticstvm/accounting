<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        $title = "Accounting, Tax & Advisory Services";
        $keywords = "Accounting services Dubai, Tax consultant Dubai, Financial advisory, Auditing services, Payroll services, Bookkeeping";
        $description = "Budgeting and forecasting, Accounting software solutions, Financial advisory Dubai, Corporate tax planning Dubai";
        return view('web.index', compact('title', 'keywords', 'description'));
    }

    public function about()
    {
        $title = "Accounting, Tax & Advisory Services";
        $keywords = "Accounting services Dubai, Tax consultant Dubai, Financial advisory, Auditing services, Payroll services, Bookkeeping";
        $description = "Budgeting and forecasting, Accounting software solutions, Financial advisory Dubai, Corporate tax planning Dubai";
        return view('web.about', compact('title', 'keywords', 'description'));
    }

    public function faqs()
    {
        $title = "Accounting, Tax & Advisory Services";
        $keywords = "Accounting services Dubai, Tax consultant Dubai, Financial advisory, Auditing services, Payroll services, Bookkeeping";
        $description = "Budgeting and forecasting, Accounting software solutions, Financial advisory Dubai, Corporate tax planning Dubai";
        return view('web.faqs', compact('title', 'keywords', 'description'));
    }

    public function team()
    {
        $title = "Accounting, Tax & Advisory Services";
        $keywords = "Accounting services Dubai, Tax consultant Dubai, Financial advisory, Auditing services, Payroll services, Bookkeeping";
        $description = "Budgeting and forecasting, Accounting software solutions, Financial advisory Dubai, Corporate tax planning Dubai";
        return view('web.team', compact('title', 'keywords', 'description'));
    }

    public function blogs()
    {
        $title = "Accounting, Tax & Advisory Services";
        $keywords = "Accounting services Dubai, Tax consultant Dubai, Financial advisory, Auditing services, Payroll services, Bookkeeping";
        $description = "Budgeting and forecasting, Accounting software solutions, Financial advisory Dubai, Corporate tax planning Dubai";
        $blogs = Blog::where('category', 'blog')->where('status', 1)->latest()->paginate(10);
        return view('web.blog', compact('title', 'keywords', 'description', 'blogs'));
    }

    public function blog(string $slug)
    {
        $keywords = "Accounting services Dubai, Tax consultant Dubai, Financial advisory, Auditing services, Payroll services, Bookkeeping";
        $description = "Budgeting and forecasting, Accounting software solutions, Financial advisory Dubai, Corporate tax planning Dubai";
        $blog = Blog::where('slug', $slug)->firstOrFail();
        $title = $blog->title;
        $blogs = Blog::where('id', '!=', $blog->id)->where('category', 'blog')->where('status', 1)->latest()->limit(10)->get();
        return view('web.blog-single', compact('title', 'keywords', 'description', 'blogs', 'blog'));
    }

    public function contact()
    {
        $title = "Accounting, Tax & Advisory Services";
        $keywords = "Accounting services Dubai, Tax consultant Dubai, Financial advisory, Auditing services, Payroll services, Bookkeeping";
        $description = "Budgeting and forecasting, Accounting software solutions, Financial advisory Dubai, Corporate tax planning Dubai";
        return view('web.contact', compact('title', 'keywords', 'description'));
    }

    public function accounting()
    {
        $title = "Accounting, Tax & Advisory Services";
        $keywords = "Accounting services Dubai, Tax consultant Dubai, Financial advisory, Auditing services, Payroll services, Bookkeeping, VAT consulting";
        $description = "Business setup services Dubai, Corporate tax planning Dubai, Financial reporting, Business setup services Dubai, Tax compliance Dubai, Small business accounting, International tax services";
        return view('web.services.accounting', compact('title', 'keywords', 'description'));
    }

    public function tax()
    {
        $title = "Accounting, Tax & Advisory Services";
        $keywords = "Accounting services Dubai, Tax consultant Dubai, Financial advisory, Auditing services, Payroll services, Bookkeeping, VAT consulting";
        $description = "Business setup services Dubai, Corporate tax planning Dubai, Financial reporting, Business setup services Dubai, Tax compliance Dubai, Small business accounting, International tax services";
        return view('web.services.tax', compact('title', 'keywords', 'description'));
    }

    public function finance()
    {
        $title = "Accounting, Tax & Advisory Services";
        $keywords = "Accounting services Dubai, Tax consultant Dubai, Financial advisory, Auditing services, Payroll services, Bookkeeping, VAT consulting";
        $description = "Business setup services Dubai, Corporate tax planning Dubai, Financial reporting, Business setup services Dubai, Tax compliance Dubai, Small business accounting, International tax services";
        return view('web.services.finance', compact('title', 'keywords', 'description'));
    }

    public function vat()
    {
        $title = "Accounting, Tax & Advisory Services";
        $keywords = "Accounting services Dubai, Tax consultant Dubai, Financial advisory, Auditing services, Payroll services, Bookkeeping, VAT consulting";
        $description = "Business setup services Dubai, Corporate tax planning Dubai, Financial reporting, Business setup services Dubai, Tax compliance Dubai, Small business accounting, International tax services";
        return view('web.services.vat', compact('title', 'keywords', 'description'));
    }

    public function map()
    {
        $title = "Accounting, Tax & Advisory Services";
        $keywords = "Accounting services Dubai, Tax consultant Dubai, Financial advisory, Auditing services, Payroll services, Bookkeeping, VAT consulting";
        $description = "Business setup services Dubai, Corporate tax planning Dubai, Financial reporting, Business setup services Dubai, Tax compliance Dubai, Small business accounting, International tax services";
        return view('web.location-map', compact('title', 'keywords', 'description'));
    }

    public function landing()
    {
        $title = "Accounting, Tax & Advisory Services";
        $keywords = "Accounting services Dubai, Tax consultant Dubai, Financial advisory, Auditing services, Payroll services, Bookkeeping";
        $description = "Budgeting and forecasting, Accounting software solutions, Financial advisory Dubai, Corporate tax planning Dubai";
        return view('web.landing', compact('title', 'keywords', 'description'));
    }

    public function sitemap()
    {
        return response()->view('web.sitemap')->header('Content-Type', 'text/xml');
    }

    public function robots()
    {
        return response()->view('web.robots')->header('Content-Type', 'text/plain');
    }
}
