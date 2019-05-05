<?php

namespace App\Http\Controllers;

use App\Admin;
use App\AdminInfo;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.login');
    }
    public function callingRegister(){
        return view('admin.register');
    }
    public function getRegister(){
        return view('admin.register');
    }
    public function dashboard(Request $request){
       $data=  AdminInfo::where('email',$request->email)->where('password',$request->password)->first();
       if ($data){
           Session::put('email',$data->email);
           return Redirect::to('/admin/dashboard');
       }else{
           Session::put('err','Email and Password Not match');
           return Redirect::to('/admin/login');
       }
    }
    public function callingDashboard(){
        return view('admin.index');
    }
    public function callingScholarship(){
        return view('admin.add');
    }
    public function addScholarship(Request $request){
        $admin = new Admin;
        $admin->title = $request->title;
        $admin->desc = $request->desc;
        $admin->institution = $request->instruction;
        $admin->fstudy = $request->fstudy;
        $admin->numofsch = $request->numofstudy;
        $admin->target = $request->targroup;
        $admin->value = $request->value;
        $admin->eligibility = $request->eligibility;
        $admin->instructions = $request->instructions;
        $admin->website = $request->website;
        $admin->save();
        $data = Admin::all();
        Session::put('msg','Data insert Successfully');
        return view('admin.view')->with('data',$data);
    }
    public function viewScholarship(){
        $data = Admin::all();
        return view('admin.view')->with('data',$data);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }


}
