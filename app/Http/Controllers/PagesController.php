<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = "Welcome to Laravel !!";

        $posts = Post::orderBy('created_at', 'desc')->take(3)->get();
        return view('pages/index')
            ->with('title', $title)
            ->with('posts', $posts);
    }

    public function about(){
        $title = "About";
        return view('pages/about')
            ->with('title', $title);
    }

    public function services(){
        $data = [
            'title' => 'Services',
            'services' => ['web design', 'SEO', 'Desktop']
        ];
        return view('pages/services')
            ->with($data);
    }
}
