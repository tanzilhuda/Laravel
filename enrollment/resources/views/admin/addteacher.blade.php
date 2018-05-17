@extends('layout')
@section('content')
    <div class="col-md-8 col-lg-8 col-lg-offset-4 grid-margin">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">Add teacher</h2>

                <div class="alert alert-warning alert-dismissible fade show" role="alert">

                        <?php
                        $exception = Session::get('exception');
                        if($exception) {
                            echo $exception;
                            Session::put('exception', null);
                        }?>

                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>



                <form class="forms-sample" method="POST" action="{{URL::to('/save_teacher')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Teacher Name</label>
                        <input type="text" class="form-control p-input" name="teachers_name" placeholder="Enter teacher Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Teacher Email</label>
                        <input type="email" class="form-control p-input" name="teachers_email" placeholder="Enter teacher Email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Teacher Phone No</label>
                        <input type="text" class="form-control p-input" name="teachers_phone" placeholder="Enter teacher Phone No">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">teacher Address</label>
                        <input type="text" class="form-control p-input" name="teachers_address" placeholder="Enter teacher Address">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Teacher Department</label>
                        <select class="form-control p-input" name="teachers_department" id="">
                            <option value="1">CSE</option>
                            <option value="2">BBA</option>
                            <option value="3">EEE</option>
                            <option value="4">ECE</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Upload teacher Image</label>
                        <div class="row">
                            <div class="col-12">
                                <label for="exampleInputFile2" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Browse</label>
                                <input type="file" name="teachers_image" class="form-control-file" id="exampleInputFile2" aria-describedby="fileHelp">
                                <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success btn-block">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection