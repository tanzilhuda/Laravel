@extends('layout')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-title">All Student Data table</h1>
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Data table</h2>
                        <div class="row">
                            <div class="col-12">
                                <table id="order-listing" class="table table-striped" style="width:100%;">
                                    <thead>
                                    <tr>
                                        <th>Student Roll</th>
                                        <th>Student Name</th>
                                        <th>Phone</th>
                                        <th>Image</th>
                                        <th>Address</th>
                                        <th>Department</th>
                                        <th>Admission Year</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($cse_student_info as $student)
                                        <tr>
                                            <td>{{$student->student_roll}}</td>
                                            <td>{{$student->student_name}}</td>
                                            <td>{{$student->student_phone}}</td>
                                            <td>
                                                <img src="{{URL::to($student->student_image)}}"
                                                     alt="Mission Image" width="70" height="70"
                                                     style="border-radius: 50%">
                                            </td>
                                            <td>{{$student->student_address}}</td>
                                            <td>
                                                @if($student->student_department == 1)
                                                    <span class="alert alert-primary">{{'CSE'}}</span>
                                                @elseif($student->student_department == 2)
                                                    <span class="alert alert-secondary">{{'BBA'}}</span>
                                                @elseif($student->student_department == 3)
                                                    <span class="alert alert-danger">{{'EEE'}}</span>
                                                @elseif($student->student_department == 4)
                                                    <span class="alert alert-success">{{'ECE'}}</span>
                                                @else
                                                    <span class="badge badge-secondary">{{'Not Define'}}</span>
                                                @endif
                                            </td>
                                            <td>{{$student->student_admissionyear}}</td>
                                            <td style="width: 24%">
                                                <button class="btn btn-outline-primary">View</button>
                                                <button class="btn btn-outline-warning">Edit</button>
                                                <button class="btn btn-outline-danger">Delete</button>
                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection