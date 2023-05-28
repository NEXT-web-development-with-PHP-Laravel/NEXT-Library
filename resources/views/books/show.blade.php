@extends('layouts.layout')

@section('content')
    <a href="\books" class="btn btn-light">Go back</a><br>
    
    <h1>{{$books->title}}</h1>
    <div style="width: 18rem">
        <img src="{{$books->book_img}}"  alt="Book Image">
    </div>
    <div>
        <p>{{$books->description}}</p>
        <p>Author name: <a href="/authors/{{$books->author_id}}">{{$books->author_name}}</a></p>
    </div>
    <a href="/books/{{$books->id}}/edit" class="btn btn-dark">Edit</a>
    <p>{{$books->author_name}}</p>
    <hr>

    <form action="{{route('books.destroy',$books->id)}}", method="POST">
        @csrf
        @method('DELETE')
        <div class="col-xs-12 col-md-12 col-sm-12">
            <button class="btn btn-primary" type="submit">Delete</button>
        </div>
    </form>
@endsection

