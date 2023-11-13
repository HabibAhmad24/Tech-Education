<?php

namespace App\Http\Controllers;

use App\Models\feedback;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Whoops\Run;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $posts = new Post();
        // $posts::all();
        $posts=Post::where('user_id','=', auth()->user()->id)->get();


        // dd($posts);
        return view('home', compact('posts'));
    }

    public function store(Request $request)
{
    $request->validate([
        'title' => 'required',
        'description' => 'required',
        'category' => [
            'required',
            Rule::in(['Web Development', 'Android Development', 'Data Science', 'MERN Development', 'PHP/Laravel Development', 'My SQL', 'Python Development']),
        ],
        'image' => 'required|mimes:jpeg,jpg,png,gif|max:10000',
    ], [
        'category.required' => 'Please select a category.',
    ]);

    // dd($request->all());
    $imagename = time().'.'.$request->image->extension();
    $request->image->move(public_path('post'), $imagename);

    $post = new Post();
    $post->image = $imagename;
    $post->title = $request->title;
    $post->description = $request->description;
    $post->user_id = auth()->user()->id;
    $post->categories = $request->category;
    $post->save();

    return back()->withSuccess('Blog posted successfully!');
}

    public function edit($id)
    {
        $post = Post::where('id', $id)->first();
        // dd($post); // To check if you've retrieved the correct post
        return view('home.edit', compact('post'));
    }
    public function update(Request $request,$id){
        $request->validate([
        'title'=> 'required',
        'description'=> 'required',
        'category'=> 'required',
        'image'=>'required|mimes:jpeg,jpg,png,gif|max:10000'


        ]);
        $post = Post::where('id',$id )->first();
        if(isset($request->image)){
            $imagename = time().'.'.$request->image->extension();

            $request->image->move(public_path('post'),$imagename);
            $post->image = $imagename;
        }
        $post->title= $request->title;
            $post->description = $request->description;
            $post->categories = $request->category;
            $post->save();
            return back()->withSuccess('Blog Updated Successful!!');


    }
    public function delete($id){
        $post = Post::where('id',$id)->first();
        $post->delete();
        return back()->withSuccess('Blog Deleted Successful!!');



    }
    
}
