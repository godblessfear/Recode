<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BookRequest;
use App\BookModel;
use App\Books;
use App\Http\Requests\author;
use App\AuthorModel;
use DB; 

class AuthorController extends Controller
{
    public function author()
	{
	    $authors = DB::select('select * from authors') ;
	    return view("author", compact('authors'))->render();
	}
	
	public function author_check(author $req)
	{
	    $name = $req->input("name");
	    DB::insert('insert into authors(name) values( ?)', [$name]);
		return redirect()->route('author');
	}
	
	public function allAuthors()
	{
		$authors = DB::select('select * from authors') ;
	}
	
	
	public function edit_author($id)
	{
	    $author_id = DB::select('select * from authors where id = ?', [$id]) ;
	    return view('edit_author', compact('author_id'))->render();
	    
	}
	
	public function update_author(author $req)
	{
	    $id = $req->input("id");
		$name = $req->input("name");
		DB::update('update authors set name = ? where id = ?', [$name, $id]);
		return redirect()->route('author');
	}
	
	public function delete_author($id)
	{
	    DB::delete('delete from authors where id = ?', [$id]);
	    
	    return redirect()->route('author');
	}
}
