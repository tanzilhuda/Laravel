@extends('student_layout')
@section('content')
    <div class="col-md-8 col-lg-8 col-lg-offset-4 grid-margin">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">Update Your Profile</h2>
                <p class="alert-success">
                    <?php
                    $exception = Session::get('exception');
                    if($exception) {
                        echo $exception;
                        Session::put('exception', null);
                    }?>
                </p>
                <form class="forms-sample" method="POST"
                      action="{{URL::to('/student_own_update')}}">

                    @csrf

                    <div class="form-group">
                        <label for="exampleInputEmail1">Student Email</label>
                        <input type="email" class="form-control p-input" name="student_email"
                               value="{{($student_description_profile->student_email)}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Student Phone No</label>
                        <input type="text" class="form-control p-input" name="student_phone"
                               value="{{($student_description_profile->student_phone)}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Student Address</label>
                        <input type="text" class="form-control p-input" name="student_address"
                               value="{{($student_description_profile->student_address)}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control p-input" name="student_password"
                               value="{{($student_description_profile->student_password)}}">
                    </div>


                    {{--<div class="form-group">--}}
                    {{--<label>Upload Student Image</label>--}}
                    {{--<div class="row">--}}
                    {{--<div class="col-12">--}}
                    {{--<label for="exampleInputFile2" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Browse</label>--}}
                    {{--<input type="file" name="student_image" class="form-control-file" id="exampleInputFile2" aria-describedby="fileHelp">--}}
                    {{--<small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}

                    <button type="submit" class="btn btn-success btn-block">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection