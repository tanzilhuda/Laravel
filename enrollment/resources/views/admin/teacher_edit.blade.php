@extends('layout')
@section('content')
    <div class="col-md-8 col-lg-8 col-lg-offset-4 grid-margin">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">Update teacher</h2>
                <p class="alert-success">
                    <?php
                    $exception = Session::get('exception');
                    if($exception) {
                        echo $exception;
                        Session::put('exception', null);
                    }?>
                </p>
                <form class="forms-sample" method="POST"
                      action="{{URL::to('/update_teacher',$teacher_description_profile->teachers_id)}}"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Teacher Name</label>
                        <input type="text" class="form-control p-input" name="teacher_name"
                               value="{{($teacher_description_profile->teachers_name)}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Teacher Email</label>
                        <input type="email" class="form-control p-input" name="teacher_email"
                               value="{{($teacher_description_profile->teachers_email)}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Teacher Phone No</label>
                        <input type="text" class="form-control p-input" name="teacher_phone"
                               value="{{($teacher_description_profile->teachers_phone)}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Teacher Address</label>
                        <input type="text" class="form-control p-input" name="teacher_address"
                               value="{{($teacher_description_profile->teachers_address)}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">teacher Department</label>
                        <select class="form-control p-input" name="teacher_department" id=""
                                value="{{($teacher_description_profile->teachers_department)}}">
                            <option value="1">CSE</option>
                            <option value="2">BBA</option>
                            <option value="3">EEE</option>
                            <option value="4">ECE</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-success btn-block">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection