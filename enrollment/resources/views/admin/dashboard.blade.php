@extends('layout')

@section('content')

  <div class="col-sm-6 col-md-3 grid-margin">
    <div class="card">
      <div class="card-body">
        <h2 class="card-title">All Students</h2>
        @php
        $totalStudent = DB::table('student_tbl')
        ->count('student_id');
        @endphp
        <p style="font-family: cursive; font-size: 12px; font-weight: bold">{{$totalStudent}}</p>
      </div>
      <div class="dashboard-chart-card-container">
        <div id="dashboard-card-chart-1" class="card-float-chart"></div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-3 grid-margin">
    <div class="card">
      <div class="card-body">
        <h2 class="card-title">All Teachers</h2>
        @php
        $totalTtudent = DB::table('teachers_tbl')
        ->count('teachers_id');
        @endphp
        <p style="font-family: cursive; font-size: 12px; font-weight: bold">{{$totalTtudent}}</p>
      </div>
      <div class="dashboard-chart-card-container">
        <div id="dashboard-card-chart-2" class="card-float-chart"></div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-3 grid-margin">
    <div class="card">
      <div class="card-body">
        <h2 class="card-title">Tution Fee</h2>
        <p style="font-family: cursive; font-size: 12px; font-weight: bold">Monthy 2500/=</p>
      </div>
      <div class="dashboard-chart-card-container">
        <div id="dashboard-card-chart-3" class="card-float-chart"></div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-3 grid-margin">
    <div class="card">
      <div class="card-body">
        <h2 class="card-title">Revenue</h2>
        <p style="font-family: cursive; font-size: 12px; font-weight: bold">12</p>
      </div>
      <div class="dashboard-chart-card-container">
        <div id="dashboard-card-chart-4" class="card-float-chart"></div>
      </div>
    </div>
  </div>

@endsection