<?php

namespace App\Http\Controllers;

use App\Models\CommunityExpert;
use App\Models\course;
use App\Models\News;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    //
    public function coures_details(){
        $courses = News::all();
        $reviews = CommunityExpert::all();
        
         // Use Course::all() to retrieve all records from the "courses" table
        
        return view('home.index', compact('courses','reviews'));
    }
    public function courses(){
        $courses = Course::all();
        // dd($courses);
        return view('home.courses', compact('courses'));


    }
    public function coursedetails($id)
    {
        $course = course::where('id',$id)->get();
        return view('home.coursedetails', compact('course'));
    }
    // public function expert_review(){
    //     $review = CommunityExpert::all();
    //     dd($review);
    //     return view('home.index', compact('review'));
    // }
}