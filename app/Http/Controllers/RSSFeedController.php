<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class RSSFeedController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();

        return response()->view('rss', [
            'posts' => $posts
        ])->header('Content-Type', 'text/xml');
    }
}
