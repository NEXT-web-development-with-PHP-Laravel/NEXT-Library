@extends('layouts.layout')
@section('content')
    <h1>Create</h1>
    <form action="{{ route('books.update',$authors->id) }}", method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="form-group">
                <strong>Author Name: </strong>
                <input type="text" name="title" placeholder="Name" value="{{$books->author_name}}" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-md-12 col-sm-12">
            <div class="form-group">
                <strong>Author Bio: </strong><br>
                <input type="text" name="body" placeholder="Name"  value="{{$books->author_bio}}"class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-md-12 col-sm-12">
            <button class="btn btn-primary" type="submit">Submit</button>
        </div>
    </div>
</form>
@endsection