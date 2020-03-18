<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $pageTitle = "About this project";
        return view('about',compact('pageTitle'));
    }
}
