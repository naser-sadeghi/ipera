<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pageTitle = "Companies";
        $companies = Company::orderby('id','DESC')->paginate(10);
        return view('companies',compact('pageTitle', 'companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pageTitle = "Create Company";
        return view('back.createcompanies',compact('pageTitle'));
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
            'name' => 'required|max:100',
            'logo' => 'dimensions:min_width=100,min_height=100 | dimensions:ratio=1/1'
        ]);
        
        $company = new Company();
        
        $company->name = $request->input('name');
        $company->address = $request->input('address');
        $company->phone = $request->input('phone');
        $company->email = $request->input('email');
        $company->website = $request->input('website');

        

        if($request->hasfile('logo')){
            $file = $request->file('logo');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;       
            $file->move('storage/logos',$filename);
            $company->logo = $filename;

        }else{
            return $request;
            $company->logo = '';
        }
        
        try{
            $company->save();
            $msg = "Added Successfully";
            return redirect(route('back.index'))->with('success',$msg); 
        }catch(\Exception $exception){
            return redirect(route('back.index'))->with('warning', $exception->getCode());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        $pageTitle = "company";
        return view('company',compact('pageTitle', 'company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        $pageTitle = "Edit Companies";
        return view('back.editcompanies',compact('pageTitle', 'company')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {


        $validatedData = $request->validate([
            'name' => 'required|max:100',
            'logo' => 'dimensions:min_width=100,min_height=100 | dimensions:ratio=1/1'
        ]);
        

        $company->name = $request->name;
        $company->address = $request->address;
        $company->phone = $request->phone;
        $company->email = $request->email;
        $company->website = $request->website;
    
        if($request->logo != '') {
            $path = public_path().'/storage/logos/';


            //code for remove old file
            if($company->logo != ''  && $company->logo != null){
                $logo_old = $path.$company->logo;
                unlink($logo_old);
           }
           
           $logo = $request->logo;
           $logoname = $logo->getClientOriginalName();
           $logo->move($path, $logoname);
 
           //for update in table
           $company->update(['logo' => $logoname]);

        }
        try{
            $company->update();
        }catch(\Exception $exception){
            return redirect(route('back.index'))->with('warning', $exception->getCode());
        }
        $msg = "The company named " . $company->name ." updated successfully.";
        return redirect(route('back.index'))->with('success',$msg);   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        try{
            $company->delete();
        }catch(\Exception $exception){
            return redirect(route('companies'))->with('warning', $exception->getCode());
        }
        $msg = "The company named " . $company->name ." was deleted.";
        return redirect(route('back.index'))->with('success',$msg); 
    }
}
