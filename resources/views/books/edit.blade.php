@extends('layouts.layout')
@section('content')
    <h1>Create</h1>
    <form action="{{ route('books.update',$books->id) }}", method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="form-group">
                <strong>Book Title</strong>
                <input type="text" name="title" placeholder="Name" value="{{$books->title}}" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-md-12 col-sm-12">
            <div class="form-group">
                <strong>Description:</strong><br>
                <input type="text" name="body" placeholder="Name"  value="{{$books->description}}"class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-md-12 col-sm-12">
            <button class="btn btn-primary" type="submit">Submit</button>
        </div>
    </div>
</form>
@endsection