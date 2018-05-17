<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use DB;
use Illuminate\Support\Facades\Session;
session_start();

class AllstudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function allstudent(){
        $allstudent_info=DB::table('student_tbl')
            ->get();

        $manage_student=view('admin.allstudent')
            ->with('allstudent_info', $allstudent_info);

        return view('layout')
            ->with('allstudent_info', $manage_student);
    }
//Student Delete Method
    public function studentdelete($student_id){
        DB::table('student_tbl')
            ->where('student_id',$student_id)
            ->delete();
        return Redirect::to('/allstudent');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //view single student data
    public function studentview($student_id)
    {
        $student_description_view = DB::table('student_tbl')
            ->select('*')
            ->where('student_id', $student_id)
            ->first();

        $manage_description_student = view('admin.studentview')
            ->with('student_description_profile', $student_description_view);
        return view('layout')
            ->with('studentview', $manage_description_student);

    }
    //Edit Student
    public function studentedit($student_id){
        $student_description_view = DB::table('student_tbl')
            ->select('*')
            ->where('student_id', $student_id)
            ->first();

        $manage_description_student = view('admin.student_edit')
            ->with('student_description_profile', $student_description_view);
        return view('layout')
            ->with('student_edit', $manage_description_student);
    }

    // Update student
    public function studentupdate(Request $request, $student_id)
    {
        $data = array();
        $data['student_name'] = $request->student_name;  //$data['DB column name'] = $request->form name;
        $data['student_roll'] = $request->student_roll;
        $data['student_fathername'] = $request->student_fathername;
        $data['student_mothername'] = $request->student_mothername;
        $data['student_email'] = $request->student_email;
        $data['student_phone'] = $request->student_phone;
        $data['student_address'] = $request->student_address;
        $data['student_password'] = $request->student_password;
        $data['student_admissionyear'] = $request->student_admissionyear;

        DB::table('student_tbl')
            ->where('student_id', $student_id)
            ->update($data);

        Session::put('exception', 'Student Update Successfully');
        return redirect::to('/allstudent');
    }

    //Student View
    public function studentprofile(){
        $student_id = Session::get('student_id');
        $student_profile = DB::table('student_tbl')
            ->select('*')
            ->where('student_id', $student_id)
            ->first();

        $manage_student = view('student.student_view')
            ->with('student_profile', $student_profile);
        return view('student_layout')
            ->with('student_view', $manage_student);

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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
