@extends('layouts.app')
@section('content')
    <h1>Create</h1>
    <form action="{{route('books.store')}}", method="POST">
    @csrf
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="form-group">
                <strong>Title</strong>
                <input type="text" name="title" placeholder="Name" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-md-12 col-sm-12">
            <div class="form-group">
                <strong>Body</strong><br>
                <input type="text" name="body" placeholder="Name" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-md-12 col-sm-12">
            <button class="btn btn-primary" type="submit">Submit</button>
        </div>
    </div>
</form>
@endsection
