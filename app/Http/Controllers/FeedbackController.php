<?php

namespace App\Http\Controllers;

use App\Models\feedback;
use Illuminate\Http\Request;


class FeedbackController extends Controller
{
    //
    public function feedback(Request $request){
        $request->validate([
            'name' => 'required',
            'email'=> 'required',
            'feedback' => 'required'

        ]);
        // dd($request);

        $feedback = new feedback();
        $feedback->name= $request->name;
        $feedback->email=$request->email;
        $feedback->feedback = $request->feedback;
        $feedback->save();
        return redirect('home.contact')->with('Feedback Send Successfully');


    }
}
