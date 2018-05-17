@extends('layout')
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
                        <img src="{{asset($teacher_description_profile->teachers_image)}}" alt="missing image" width="47" height="47">
                        <p class="name">Name: {{$teacher_description_profile->teachers_name}}</p>
                        <p class="name">Email: {{$teacher_description_profile->teachers_email}}</p>
                        <p class="name">Mobile: {{$teacher_description_profile->teachers_phone}}</p>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-body overview">

                        <div class="wrapper about-user">
                            <h2 class="card-title mt-4 mb-3">About</h2>
                            <p>The total information of the teacher is given below </p>
                        </div>
                        <div class="info-links">

                            <a class="website">
                                <i class="icon-globe icon">Address:</i>
                                <span style="font-family: Verdana; font-size: 15px">{{$teacher_description_profile->teachers_address}}</span>
                            </a>
                            <a class="website">
                                <i class="icon-globe icon">Department:</i>
                                <span style="font-family: Verdana; font-size: 15px">
                                    {{convert_department($teacher_description_profile->teachers_department)}}</span>
                            </a>

                        </div>
                    </div>
                </div>
            </div>

        </div>

@endsection
