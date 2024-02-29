<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        $post = Post::all()->last();
        dd($post);
        return view('welcome', ['post'=>$post]);
    }

    public function detailPost(){
        return view('detail');
    }
}
