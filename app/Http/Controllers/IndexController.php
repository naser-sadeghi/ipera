<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;

class IndexController extends Controller
{
    public function index()
    {
        $pageTitle = "IPERA SOLUTIONS";
        $companies = Company::orderby('id')->paginate(4); //showing 4 latest companies in the index
        return view('index',compact('pageTitle', 'companies'));
    }
}
