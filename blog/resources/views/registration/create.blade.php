@extends('layouts.master');

@section('content')
    <div class="col-sm-8">
        <h1>register</h1>

        <form action="/register" method="POST">
            {{csrf_field()}}
            <div class="form-group">
                <level for="name">Name:</level>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="form-group">
                <level for="email">Email:</level>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="form-group">
                <level for="password">password:</level>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>

            <div class="form-group">
                <level for="password_confirmation">password Conformation:</level>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Register</button>
            </div>

            @include('layouts.errors')

        </form>

    </div>

@endsection