<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\Authors;
use Illuminate\Support\Facades\DB;
class admincontroller extends Controller
{
    public function loginindex()
    {
        return view('adminlogin');
    }
    public function loginadmin(Request $request)
    {
        // print_r($request->all());
        $this->validate($request,
          [
                  'name'=>'required',
                  'password'=>'required',
              ]
              );
     $name=$request->input('name');
     $pas=$request->input('password');
     $checklogin=DB::table('admin')->where(['name'=>$name,'password'=>$pas])->get();
     if(count($checklogin)>0)
     {
        $x=$request->input('name');
        $request->session()->put('name',$x);
         echo"Login Successfull</br>";
         return redirect ('/student/view');

     }
     else{
         echo "login failed Wrong Email or password";
     }
}
}