<?php

namespace App\Http\Controllers;

use App\AdminInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AdminInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $adminInfo = new AdminInfo;
        $adminInfo->username = $request->username;
        $adminInfo->email = $request->email;
        if ($request->password != $request->rpassword){
            \Session::put('err','Password Not Match');
            return Redirect::to('/admin/register');
        }else{
            $adminInfo->password = $request->password;
            $adminInfo->save();
            \Session::put('crmsg','Registration Successfully');
            \Session::put('email',$request->email);
            return Redirect::to('/admin/dashboard');
        }
//        return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AdminInfo  $adminInfo
     * @return \Illuminate\Http\Response
     */
    public function show(AdminInfo $adminInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AdminInfo  $adminInfo
     * @return \Illuminate\Http\Response
     */
    public function edit(AdminInfo $adminInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AdminInfo  $adminInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdminInfo $adminInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AdminInfo  $adminInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdminInfo $adminInfo)
    {
        //
    }
}
