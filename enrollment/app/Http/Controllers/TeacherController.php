<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use DB;
use Illuminate\Support\Facades\Session;
session_start();

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function allteacher(){
        $allteacher_info=DB::table('teachers_tbl')
            ->get();

        $manage_teacher=view('admin.allteacher')
            ->with('allteacher_info', $allteacher_info);

        return view('layout')
            ->with('allteacher_info', $manage_teacher);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addteacher()
    {
        return view('admin.addteacher');
    }

    public function saveteacher(Request $request){
        $data=array();
        $data['teachers_name']           = $request->teachers_name;
        $data['teachers_email']          = $request->teachers_email;
        $data['teachers_phone']          = $request->teachers_phone;
        $data['teachers_address']        = $request->teachers_address;
        $data['teachers_department']     = $request->teachers_department;
        $image                           = $request->file('teachers_image');


        if($image){
            $image_name     = str_random(20);
            $ext            = strtolower($image->getClientOriginalExtension());
            $image_full_name= $image_name.'.'.$ext;
            $upload_path    = 'image/';
            $image_url      = $upload_path.$image_full_name;
            $success        = $image->move($upload_path,$image_full_name);

            if($success){
                $data['teachers_image']=$image_url;

                DB::table('teachers_tbl')->insert($data);

                Session::put('exception', 'Teacher Added Sucessfully!!');

                return Redirect::to('/allteacher');
            }
        }
    }

    //Teacher Delete Method
    public function teacherdelete($teachers_id){
        DB::table('teachers_tbl')
            ->where('teachers_id',$teachers_id)
            ->delete();
        return Redirect::to('/allteacher');
    }
//Teacher View
    public function teacherview($teachers_id)
    {
        $teacher_description_view = DB::table('teachers_tbl')
            ->select('*')
            ->where('teachers_id', $teachers_id)
            ->first();

        $manage_description_teacher = view('admin.teacherview')
            ->with('teacher_description_profile', $teacher_description_view);
        return view('layout')
            ->with('teacherview', $manage_description_teacher);
    }

    //Edit teacher
    public function teacheredit($teachers_id){
        $teacher_description_view = DB::table('teachers_tbl')
            ->select('*')
            ->where('teachers_id', $teachers_id)
            ->first();

        $manage_description_teacher = view('admin.teacher_edit')
            ->with('teacher_description_profile', $teacher_description_view);
        return view('layout')
            ->with('teacher_edit', $manage_description_teacher);
    }

    // Update teacher
    public function teacherupdate(Request $request, $teachers_id)
    {
        $data = array();
        $data['teachers_name'] = $request->teacher_name;  //$data['DB column name'] = $request->form name;
        $data['teachers_email'] = $request->teacher_email;
        $data['teachers_phone'] = $request->teacher_phone;
        $data['teachers_address'] = $request->teacher_address;
        $data['teachers_department'] = $request->teacher_department;

        DB::table('teachers_tbl')
            ->where('teachers_id', $teachers_id)
            ->update($data);

        Session::put('exception', 'Teacher Update Successfully');
        return redirect::to('/allteacher');
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
