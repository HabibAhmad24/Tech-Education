<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    //
    public function index(){
        // dd('admin.index');
        return view('admin.index');
    }
}
