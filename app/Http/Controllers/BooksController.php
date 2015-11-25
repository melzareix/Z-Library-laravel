<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Book;
use App\User;
use Auth;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
    $this->middleware('auth',['except'=>'index']);
    //$this->middleware('admin',['uses'=>'create']);
   // $this->middleware('admin',['uses'=>'edit']);

    }
    public function index()
    {
        $books = Book::all();
        return view('books.index',compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request , ['name'=>'required|min:3','author'=>'required','description'=>'required']);
        $book = $request->all();
        Book::create($book);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Book::findOrFail($id);
        $borrowed = Book::find($id)->borrowed;
        $borrowText = "Borrow";
        $ref = 'borrow';
        foreach ($borrowed as $user) {
            if($user->id == Auth::user()->id){
                $borrowText = "Unborrow";
                $ref = 'unborrow';
                break;
            }
        }
        return view('books.show',compact('book','borrowText','ref'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::findOrFail($id);
        return view('books.edit',compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $book = Book::findOrFail($id);
        $book->update($request->all());
        return redirect('/');
    }

    public function borrowed(){

        if(!Auth::User()->admin){
            $books = User::find(Auth::user()->id);
            $books = $books->borrowed;
            return view('books.borrowed',compact('books'));
        }
        return redirect('/');
    }

    public function borrow($id){
        $book = Book::find($id)->borrowed()->attach(Auth::user()->id);
        return redirect('/books/borrowed');
    }

    public function unborrow($id){
        $book = Book::find($id)->borrowed()->detach(Auth::user()->id);
        return redirect('/books/borrowed');
    }
}
