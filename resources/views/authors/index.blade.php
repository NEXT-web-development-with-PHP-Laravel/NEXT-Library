@extends('layouts.layout')
@section('content')
    <h1>Authors</h1>
    @if (count($authors)>0)
        @foreach ($authors as $author)
        <div class="container-fluid w-75 my-5 p-5" style="background-color: bisque">
            <div class="row">
            <div class="col-md-6">
                <div style="width: 18rem">
                    <img src="{{$author->author_img}}" class="card-img-top" alt="...">
                </div>
            </div>
            <div class="col-md-6 p-5">
                <h5 class="my-5">{{$author->author_name}}</h5>
                <p class="my-5">{{$author->author_bio}}</p>
                <a href="">Edit</a>
            </div>  
            </div>
             
        </div>
        @endforeach
         {{$authors->links()}}
    @else
        <p>NO Post has found</p>
    @endif
@endsection   
