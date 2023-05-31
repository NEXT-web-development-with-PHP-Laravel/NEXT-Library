@extends('layouts.layout')
@section('content')
    <h1>Books</h1>
    @if (count($books)>0)
        @foreach ($books as $book)
        <div class="container-fluid w-75 my-5 p-5" style="background-color: bisque">
            <div class="row">
            <div class="col-md-6">
                <div style="width: 18rem">
                    <img src="{{$book->book_img}}" class="card-img-top" alt="...">
                </div>
            </div>
            <div class="col-md-6 p-5">
                <h5 class="my-5">{{$book->title}}</h5>
                <p class="my-5">{{$book->description}}</p>
                <p>Author name: <a href="/authors">{{$book->author_name}}</a></p>
                <p>Category: {{$book->category_name}}</p>
                <a href="/books/{{$book->id}}" class="btn btn-primary">Details</a>
            </div>  
            </div>
        </div>
        @endforeach
        
    @else
        <p>NO Post has found</p>
    @endif
@endsection   
