<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        $post = Post::get(); // or $post = Post::all();
        //dd($post); //dum death
        return view('welcome', ['post'=>$post]);
    }

    public function detailPost(){
        return view('detail');
    }
}
