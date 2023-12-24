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
}
