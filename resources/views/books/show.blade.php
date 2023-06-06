@extends('layouts.layout')

@section('content')
    @foreach ($books as $book)
    <a href="\books" class="btn btn-light">Go back</a><br>
    <h1>{{ $book->title }}</h1>
    <div class="img" style="width:18rem">
        <img src="{{asset($book->book_img)}}" class="card-img-top" alt="...">
    </div>
    <p>Book description: {{ $book->description }}</p>
    <p>Aurthors Name: {{ $book->author_name }}</p>
    <p>Category: {{ $book->category_name }}</p>

    <a href="/books/{{$book->id}}/edit" class="btn btn-dark">Edit</a>
     <hr>
    <form action="{{route('books.destroy',$book->id)}}", method="POST">
        @csrf
        @method('DELETE')
        <div class="col-xs-12 col-md-12 col-sm-12">
            <button class="btn btn-primary" type="submit">Delete</button>
        </div>
    </form>
@endforeach
    

@endsection

