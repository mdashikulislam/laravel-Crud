<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function home(){
        $data = Admin::paginate(10);
        return view('user.main')->with('data',$data);
    }
    public function single($id){
        $da = Admin::where('id',$id)->first();
        return view('user.single')->with('da',$da);
    }
}
