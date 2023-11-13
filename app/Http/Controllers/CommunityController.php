<?php

namespace App\Http\Controllers;

use App\Models\CommunityExpert;



use Illuminate\Http\Request;

class CommunityController extends Controller
{
    //
    public function expert_review(){
        $reviews = CommunityExpert::all();
        // dd($review);
        return view('home.index', compact('reviews'));
    }
}
