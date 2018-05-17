@extends('student_layout')
@php
function convert_department($value){
$values=[
1=>'CSE',
2=>'BBA',
3=>'ECE',
4=>'EEE',
];
return $values[$value];
}
@endphp
@section('content')


    <div class="row user-profile">
        <div class="col-lg-12 side-left">
            <div class="card mb-4">
                <div class="card-body avatar">
                    <h2 class="card-title">Info</h2>
                    <img src="{{asset($student_profile->student_image)}}" alt="missing image" width="47" height="47">
                    <p class="name">{{$student_profile->student_name}}</p>
                    <p class="email">ROLL: {{$student_profile->student_roll}}</p>
                    <p class="email">{{$student_profile->student_email}}</p>
                    <p class="email">{{$student_profile->student_phone}}</p>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body overview">
                    <ul class="achivements">
                        <li><p>34</p><p>Projects</p></li>
                        <li><p>23</p><p>Task</p></li>
                        <li><p>29</p><p>Completed</p></li>
                    </ul>
                    <div class="wrapper about-user">
                        <h2 class="card-title mt-4 mb-3">About</h2>
                        <p>The total information of the student is given below </p>
                    </div>
                    <div class="info-links">
                        <a class="website">
                            <i class="icon-globe icon">Father's name:</i>
                            <span style="font-family: Verdana; font-size: 15px">{{$student_profile->student_fathername}}</span>
                        </a>
                        <a class="website">
                            <i class="icon-globe icon">Mother's name:</i>
                            <span style="font-family: Verdana; font-size: 15px">{{$student_profile->student_mothername}}</span>
                        </a>
                        <a class="website">
                            <i class="icon-globe icon">Address:</i>
                            <span style="font-family: Verdana; font-size: 15px">{{$student_profile->student_address}}</span>
                        </a>
                        <a class="website">
                            <i class="icon-globe icon">Department:</i>
                                <span style="font-family: Verdana; font-size: 15px">
                                    {{convert_department($student_profile->student_department)}}</span>
                        </a>
                        <a class="website">
                            <i class="icon-globe icon">Student's Admission Year:</i>
                                <span style="font-family: Verdana; font-size: 15px">
                                    {{($student_profile->student_admissionyear)}}</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
