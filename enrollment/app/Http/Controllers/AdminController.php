<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();

class AdminController extends Controller
{

    //Login Dashboard for Admin
    public function login_dashboard(Request $request)
    {
        //return view('admin.dashboard');
        $email = $request->admin_email;
        $password = md5($request->admin_password);
        $result = DB::table('admin_tbl')
        ->where('admin_email', $email)
        ->where('admin_password', $password)
        ->first();

        if($result){
            Session::put('admin_email', $result->admin_email);
            Session::put('admin_id', $result->admin_id);
            return Redirect::to('/admin_dashboard');

        }
        else{
            Session::put('exception', 'Email or Password Invalid');
            return Redirect::to('/backend');
        }
    }

    public function admin_dashboard(){
        return view('admin.dashboard');
    }
//logout
    public function logout(){
        Session::put('admin_name', null);
        Session::put('admin_id', null);

        return Redirect::to('/backend');
    }

    //view Profile
    public function viewprofile(){
        return view('admin.viewprofile');
    }

    //settings
    public function setting(){
        return view('admin.setting');
    }

    //Student Dashboard
    public function student_dashboard(){
        return view('student.dashboard');
    }

    //Login Dashboard for Student
    public function student_login_dashboard(Request $request)
    {

        $email = $request->student_email;
        $password = md5($request->student_password);
        $result = DB::table('student_tbl')
            ->where('student_email', $email)
            ->where('student_password', $password)
            ->first();

        if($result){
            Session::put('student_email', $result->student_email);
            Session::put('student_id', $result->student_id);
            return Redirect::to('/student_dashboard');

        }
        else{
            Session::put('exception', 'Email or Password Invalid');
            return Redirect::to('/');
        }
    }
}
