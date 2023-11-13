<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    //
    public function webblogs(){
        
        $posts = Post::where("categories", "=", "Web Development")->get();
        // dd($posts);
        return view('home.web', compact('posts'));
    }
    public function androidblog(){
        $posts = Post::where("categories", "=" , "Android Development")->get();
        return view('home.android', compact('posts'));


    }
    public function datascience(){
        $posts = Post::where("categories", "=" , "Data Science")->get();
        return view('home.datascience', compact('posts'));


    }
    public function mern(){
        $posts = Post::where("categories", "=" , "MERN Development")->get();
        return view('home.mern', compact('posts'));


    }
    public function laravel(){
        $posts = Post::where("categories", "=" , "PHP/Laravel Development")->get();
        return view('home.laravel', compact('posts'));


    }
    public function mysql(){
        $posts = Post::where("categories", "=" , "My SQL")->get();
        return view('home.mysql', compact('posts'));

    }
    public function python(){
        $posts = Post::where("categories", "=" , "Python Development")->get();
        return view('home.python', compact('posts'));

    }
}
