<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
//use this model
class BookController extends Controller
{
    //
    public function index(){
        $books=Book::orderBy('id','desc')->paginate(2);
//        $bookId=Book::findOrFail($id);
//        $book=Book::select('id','title')->get();
//        $book=Book::select('title')->where('id','>=',2)->orderBy('id','desc')->get();
//        dd($book);
        return view('books/index',compact('books'));


    }
    public function show($id){
//        $book=Book::where('id','=',$id)->first();
        $book=Book::findOrFail($id);
        return view('books/show',compact('book'));
    }
    public function create(){
        return view('books/create');
    }
    public function store(Request $request){
$title=$request->title;
    $description=$request->description;
    Book::create(['title'=>$title,'description'=>$description]);
        return redirect( route('books.index'));
    }
}
