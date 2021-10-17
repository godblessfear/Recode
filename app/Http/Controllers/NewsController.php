<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BookRequest;
use App\Authors;
use App\Books;
use DB; 

class NewsController extends Controller
{
    //
	public function indexxx()
	{
	    $books = new Books;
	    return view('index', ["datasss" => $books->get()]);
	}
	
	public function author_index($name)
	{
		$datasss = Books::where('author', $name)->get();
		return view('index', compact('datasss'))->render();
	}
	
	public function addbook()
	{
		$authors = Authors::all();
	    return view("books", compact('authors'))->render();
	}
	
	public function delete_book($id)
	{
	    Books::where('id', $id )->delete();	    
	    return redirect()->route('index');
	}
	
	public function edit_book($id)
	{
		$booksss = Books::find([$id]);
	    return view('edit_book', compact('booksss'))->render();
	}
	
	public function addbook_check(Request $request){
		$this->validate($request, [
			'name' => 'required|max:100',
            'date' => 'required|date'
		]);
		
		$book = new Books;
		$book->name = $request->input('name');
		$book->author = $request->input('author');
		$book->date = $request->input('date');
		
		$book->save();
		
		return redirect()->route('index');
	}
	
	public function update_book(Request $request)
	{
		$this->validate($request, [
			'name' => 'required|max:100',
			'author' => 'required|max:100',
			'date' => 'required|date',
		]);
		Books::where('id' , $request->input('id'))->update([
			'name' => $request->input('name'),
			'author' => $request->input('author'),
			'date' => $request->input('date'),			
		]);
		return redirect()->route('index');
	}
	
}
