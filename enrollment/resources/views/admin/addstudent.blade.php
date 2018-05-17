@extends('layout')
@section('content')
    <div class="col-md-8 col-lg-8 col-lg-offset-4 grid-margin">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">Add Student</h2>
                <p class="alert-success">
                    <?php
                    $exception = Session::get('exception');
                    if($exception) {
                        echo $exception;
                        Session::put('exception', null);
                    }?>
                </p>
                <form class="forms-sample" method="POST" action="{{URL::to('/save_student')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Student Name</label>
                        <input type="text" class="form-control p-input" name="student_name" placeholder="Enter Student Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Student Roll</label>
                        <input type="text" class="form-control p-input" name="student_roll" placeholder="Enter Student Roll">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Student Father Name</label>
                        <input type="text" class="form-control p-input" name="student_fathername" placeholder="Enter Student Father Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Student Mother Name</label>
                        <input type="text" class="form-control p-input" name="student_mothername" placeholder="Enter Student Mother Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Student Email</label>
                        <input type="email" class="form-control p-input" name="student_email" placeholder="Enter Student Email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Student Phone No</label>
                        <input type="text" class="form-control p-input" name="student_phone" placeholder="Enter Student Phone No">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Student Address</label>
                        <input type="text" class="form-control p-input" name="student_address" placeholder="Enter Student Address">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control p-input" name="student_password" placeholder="Enter Your Password">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Student Department</label>
                        <select class="form-control p-input" name="student_department" id="">
                            <option value="1">CSE</option>
                            <option value="2">BBA</option>
                            <option value="3">EEE</option>
                            <option value="4">ECE</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Student Admission Year</label>
                        <input type="date" class="form-control p-input" name="student_admissionyear" placeholder="Enter Student Admission Year">
                    </div>

                    <div class="form-group">
                        <label>Upload Student Image</label>
                        <div class="row">
                            <div class="col-12">
                                <label for="exampleInputFile2" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Browse</label>
                                <input type="file" name="student_image" class="form-control-file" id="exampleInputFile2" aria-describedby="fileHelp">
                                <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success btn-block">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection