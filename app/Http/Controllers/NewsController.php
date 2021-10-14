<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BookRequest;
use App\BookModel;
use App\Books;
use App\Http\Requests\author;
use DB; 

class NewsController extends Controller
{
    //
	public function indexxx()
	{
	    $books = new Books;
	    return view('index', ["datasss" => $books->get()]);
	}
	
	public function addbook()
	{
	    $authors = DB::select('select * from authors') ;
	    return view("books", compact('authors'))->render();
		//return view('books');
	}
	
	public function delete_book($id)
	{
	    Books::where('id', $id ) -> delete();
	    
	    return redirect()->route('index');
	}
	
	
	
	public function edit_book($id)
	{
	    $booksss = DB::select('select * from books where id = ?', [$id]);
	    return view('edit_book', compact('booksss'))->render();
	}
	/*
	public function edit_book($id)
	{
	    $book = new Books;
	    return view('edit_book', ['booksss' => $book->where('id', $id) -> get()]);
	    
	}*/
	
	
	public function addbook_check(BookRequest $req)
	{
		$name_book = $req->input("name");
		$author_book = $req->input("author");
		$date = $req->input("date");		
		DB::insert('insert into books(name, author, date) values( ?, ?, ?)', [$name_book , $author_book , $date]);
		return redirect()->route('index');
	}
	
	public function update_book(BookRequest $req)
	{
	    $id = $req->input("id");
		$name_book = $req->input("name");
		$author_book = $req->input("author");
		$date = $req->input("date");
		DB::update('update books set name = ? , author = ?, date = ? where id = ?', [$name_book , $author_book , $date , $id]);
		return redirect()->route('index');
	}
	
}
