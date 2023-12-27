<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        $title = "";
        $keywords = "";
        $description = "";
        return view('web.index', compact('title', 'keywords', 'description'));
    }

    public function about()
    {
        $title = "";
        $keywords = "";
        $description = "";
        return view('web.about', compact('title', 'keywords', 'description'));
    }

    public function faqs()
    {
        $title = "";
        $keywords = "";
        $description = "";
        return view('web.faqs', compact('title', 'keywords', 'description'));
    }

    public function blogs()
    {
        $title = "";
        $keywords = "";
        $description = "";
        return view('web.blog', compact('title', 'keywords', 'description'));
    }

    public function contact()
    {
        $title = "";
        $keywords = "";
        $description = "";
        return view('web.contact', compact('title', 'keywords', 'description'));
    }
}
