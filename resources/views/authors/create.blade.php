@extends('layouts.layout')
@section('content')
    <h1>Create</h1>
    <form action="{{route('authors.store')}}", method="POST">
    @csrf
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="form-group">
                <strong>Author Image</strong>
                <input type="file" name="author_img" class="form-control">
            </div>
        </div>
        <div class="col-lg-12 margin-tb">
            <div class="form-group">
                <strong>Author Name:</strong>
                <input type="text" name="author_img" placeholder="Name" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-md-12 col-sm-12">
            <div class="form-group">
                <strong>Auther Bio:</strong><br>
                <input type="text" name="aurthor_img" placeholder="Name" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-md-12 col-sm-12">
            <button class="btn btn-primary" type="submit">Submit</button>
        </div>
    </div>
</form>
@endsection
