<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Company;
use App\Employee;

class AdminController extends Controller
{
    public function index(){
        $companies = Company::orderby('id','DESC')->paginate(10);
        $employees = Employee::orderby('id','DESC')->paginate(10);
        return view('back.index',compact('companies','employees'));
    }
}
