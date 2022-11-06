@extends('include.layout')
@section('content')
    <h1>Backend strong girll</h1>
    @foreach($books as $book)
        <hr>
        <a href="{{route('books.show',$book->id)}}">
            <h3> {{$book->title}}</h3>
        </a>
        <p>{{$book->description}}</p>

    @endforeach
    {{$books->render()}};





@endsection
