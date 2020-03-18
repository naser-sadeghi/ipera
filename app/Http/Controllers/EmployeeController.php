<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Company;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pageTitle = "Employees";
        $companies = Company::orderby('id','DESC')->get();
        $employees = Employee::orderby('id','DESC')->paginate(10);
        return view('employees',compact('pageTitle','employees','companies'));


        


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pageTitle = "Create Employee";
        $companies = Company::orderby('id','DESC')->get();
        return view('back.createemployees',compact('pageTitle','companies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'firstname' => 'required|max:100',
            'lastname' => 'required|max:100',
            'phone' => 'required',
        ]);


        $employee = new Employee();
        $employee->firstname = $request->firstname;
        $employee->lastname = $request->lastname;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->company_id = $request->company;
        
        try{
            $employee->save();
           
        }catch(\Exception $exception){
            dd($exception->getCode());
            return redirect(route('back.index'))->with('warning', $exception->getCode());
        }
        $msg = "Employee added successfully.";
        return redirect(route('back.index'))->with('success',$msg);   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        $pageTitle = "Employee";
        $companies = Company::where('id', '=',  $employee->company_id)->first();
        $company = $companies->name;
        return view('employee',compact('pageTitle', 'employee','company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        $pageTitle = "Edit Employees";
        $companies = Company::orderby('id','DESC')->get();
        return view('back.editemployees',compact('pageTitle', 'employee','companies'));  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {

        $validatedData = $request->validate([
            'firstname' => 'required|max:100',
            'lastname' => 'required|max:100',
            'phone' => 'required',
        ]);

        $employee->firstname = $request->firstname;
        $employee->lastname = $request->lastname;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->company_id = $request->company;
      
        try{
            $employee->save();
        }catch(\Exception $exception){
            return redirect(route('back.index'))->with('warning', $exception->getCode());
        }
        $msg = "The profile of employee " . $employee->firstname . " " . $employee->lastname . " updated successfully.";
        return redirect(route('back.index'))->with('success',$msg); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();
        $msg = "Employee " . $employee->firstname . " " . $employee->lastname . " was deleted successfully.";
        return redirect(route('back.index'))->with('success',$msg); 
    }
}
