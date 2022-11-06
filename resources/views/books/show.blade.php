@extends('include.layout')
@section('content')
    <h1>Book ID:{{$book->id}}</h1>
    <h3>{{$book->title}}</h3>
    <p>{{$book->description}}</p>
    <a href="{{route('books.index')}}">Back</a>

@endsection
