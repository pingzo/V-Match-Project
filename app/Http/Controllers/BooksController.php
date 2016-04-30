<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Books;
use Illuminate\Support\Facades\View;
use App\Http\Requests\StoreBooksRequest;

class BooksController extends Controller
{
    
    public function __construct(){
        $this->middleware('auth');
        
    }

    public function index()
    {
        $books = Books::with('typebooks')->paginate(5); //tbBooks join tbTypeBooks
        return view('books/index', ['books'=>$books]); //books/index.blade.php
    }
    
    public function create()
    {
        return view('books.create');
    }
    
     public function store(StoreBooksRequest $request)
     {
         $books = new Books();
         /*$books->title = $request->title;
         $books->price = $request->price;
         $books->typebooks_id = $request->typebooks_id;
         $books->save();*/
         
         $books->create($request->all()); //ต้องไปกำหนด $fillable ที่ Model ด้วย
         
        return redirect()->action('BooksController@index'); //redict() go to  books.blade.php
    }
    
     public function show($id)
     {
        
    }
    public function edit($id)
    {
        $book = Books::findOrFail($id);
        return view('books.edit',['book'=>$book]);
    }
    
    public function update(StoreBooksRequest $request, $id)
    {
        $book = Books::find($id);
        /*$book->title = $request->title;
        $book->price = $request->price;
        $book->typebooks_id = $request->typebooks_id;
        $book->save();*/
        $book->update($request->all());
        
         return 'ok';
    }
    
    public function destroy($id)
    {
        Books::find($id)->delete();
        return redirect()->action('BooksController@index');
    }
    
    
    
}
