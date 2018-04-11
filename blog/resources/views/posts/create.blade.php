@extends('layouts.master')
@section('content')

    <div class="col-sm-8 blog-main">
        <h1>Create the post</h1>
        <hr>

        <form method="POST" action="/posts">
            {{csrf_field()}}
            <div class="form-group">
                <label for="Title">Title</label>
                <input type="text" class="form-control" id="Title" name="title">
            </div>

            <div class="form-group">
                <label for="body">Description</label>
                <textarea class="form-control" id="body" rows="5" name="body"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Publish</button>
            </div>

            @include('layouts.errors')

        </form>
    </div>

    @endsection