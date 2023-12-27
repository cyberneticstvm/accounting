<?php

namespace App\Http\Controllers;

use App\Models\Blog;
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
        $blogs = Blog::where('category', 'blog')->where('status', 1)->latest()->paginate(10);
        return view('web.blog', compact('title', 'keywords', 'description', 'blogs'));
    }

    public function blog(string $slug)
    {
        $title = "";
        $keywords = "";
        $description = "";
        $blog = Blog::where('slug', $slug)->firstOrFail();
        $blogs = Blog::where('id', '!=', $blog->id)->where('category', 'blog')->where('status', 1)->latest()->limit(10)->get();
        return view('web.blog-single', compact('title', 'keywords', 'description', 'blogs', 'blog'));
    }

    public function contact()
    {
        $title = "";
        $keywords = "";
        $description = "";
        return view('web.contact', compact('title', 'keywords', 'description'));
    }
}
