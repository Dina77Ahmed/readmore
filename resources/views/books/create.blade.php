
@extends('include.layout')

@section('title')
    Add new book
@endsection

@section('content')
    <form action="{{route('books.store')}}" method="POST">
       @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">Title</label>
            <input name="title" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Title">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">
                <textarea name="description" type="text" placeholder="Text" class="form-control" rows="3"></textarea>
            </label>

        </div>
        <button type="submit" class="btn btn-primary">Submit</button>



@endsection
