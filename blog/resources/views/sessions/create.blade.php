@extends('layouts.master');

@section('content')
    <div class="col-sm-8">
        <h1>Sign In</h1>

        <form action="/login" method="POST">
            {{csrf_field()}}

            <div class="form-group">
                <level for="email">Email:</level>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="form-group">
                <level for="password">password:</level>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Sign In</button>
            </div>

            @include('layouts.errors')

        </form>

    </div>

@endsection