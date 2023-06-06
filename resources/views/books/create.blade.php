@extends('layouts.layout')
@section('content')
    <h1>Create</h1>
    <form action="{{route('books.store')}}", method="POST">
    @csrf
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="form-group">
                <strong>Image</strong>
                <input type="file" name="book_img" class="form-control">
            </div>
        </div>
        <div class="col-lg-12 margin-tb">
            <div class="form-group">
                <strong>Title</strong>
                <input type="text" name="title" placeholder="Name" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-md-12 col-sm-12">
            <div class="form-group">
                <strong>Description</strong><br>
                <input type="text" name="description" placeholder="Name" class="form-control">
            </div>
        </div>
        {{-- choose the author --}}
        <label for="" class="control-label">Author Name:</label>
        <select name="author_name" id="" class="form-control">
            <option value="">Select Author</option>
            @foreach($books as $book)
            <option value="{{$book->id}}">{{$book->author_name}}</option>
            @endforeach
        </select>

        {{-- choose the author --}}
        <label for="" class="control-label">Category Name:</label>
        <select name="author_name" id="" class="form-control">
            <option value="">Select category</option>
            @foreach($books as $book)
            <option value="{{$book->id}}">{{$book->category_name}}</option>
            @endforeach
        </select>


        <div class="col-xs-12 col-md-12 col-sm-12">
            <button class="btn btn-primary" type="submit">Submit</button>
        </div>
    </div>
</form>
@endsection
