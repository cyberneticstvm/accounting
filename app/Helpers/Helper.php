<?php

use App\Models\Blog;

function blogs()
{
    return Blog::latest()->get();
}
