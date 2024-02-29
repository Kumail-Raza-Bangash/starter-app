<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        $posts = Post::get(); // or $post = Post::all();
        //dd($post); //dum death
        return view('welcome', ['posts'=>$posts]);
    }

    public function detailPost(){
        return view('detail');
    }
}
