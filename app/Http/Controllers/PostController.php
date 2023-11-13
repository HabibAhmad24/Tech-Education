<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function blogs(){
        $posts = Post::with('user')->get();
        // dd($posts->first()->user->name);

        // $posts =Post::all();
        // $users = User::all();
        // dd($posts); 

        return view('home.blog', compact('posts'));
    }
    public function blog_details($id){
        $posts = Post::where('id',$id)->get();
        // dd($post);
        return view('home.post', compact('posts'));


    }
}
