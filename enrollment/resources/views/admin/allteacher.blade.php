@extends('layout')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-title">All Teacher Data table</h1>
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Data table</h2>

                        <p class="alert-success">
                            <?php
                            $exception = Session::get('exception');
                            if($exception) {
                                echo $exception;
                                Session::put('exception', null);
                            }?>
                        </p>
                        <div class="row">
                            <div class="col-12">
                                <table id="order-listing" class="table table-striped" style="width:100%;">
                                    <thead>
                                    <tr>

                                        <th>Teacher Name</th>
                                        <th>Teacher Email</th>
                                        <th>Teacher Phone</th>
                                        <th>Teacher Image</th>
                                        <th>Teacher Address</th>
                                        <th>Teacher Department</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($allteacher_info as $teacher)
                                        <tr>
                                            <td>{{$teacher->teachers_name}}</td>
                                            <td>{{$teacher->teachers_email}}</td>
                                            <td>{{$teacher->teachers_phone}}</td>
                                            <td>
                                                <img src="{{URL::to($teacher->teachers_image)}}"
                                                     alt="Mission Image" width="70" height="70"
                                                     style="border-radius: 50%">
                                            </td>
                                            <td>{{$teacher->teachers_address}}</td>
                                            <td>
                                                @if($teacher->teachers_department == 1)
                                                    <span class="alert alert-primary">{{'CSE'}}</span>
                                                @elseif($teacher->teachers_department == 2)
                                                    <span class="alert alert-secondary">{{'BBA'}}</span>
                                                @elseif($teacher->teachers_department == 3)
                                                    <span class="alert alert-danger">{{'EEE'}}</span>
                                                @elseif($teacher->teachers_department == 4)
                                                    <span class="alert alert-success">{{'ECE'}}</span>
                                                @else
                                                    <span class="badge badge-secondary">{{'Not Define'}}</span>
                                                @endif
                                            </td>
                                            <td style="width: 24%">
                                                <a href="{{URL::to('/teacher_view/'.$teacher->teachers_id)}}"><button class="btn btn-outline-primary">View</button></a>
                                                <a href="{{URL::to('/teacher_edit/'.$teacher->teachers_id)}}"><button class="btn btn-outline-warning">Edit</button></a>
                                                <a id="delete" href="{{URL::to('/teacher_delete/'.$teacher->teachers_id)}}">
                                                    <button class="btn btn-outline-danger">Delete</button></a>
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