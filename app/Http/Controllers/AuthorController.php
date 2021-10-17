<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BookRequest;
use App\Authors;
use App\Books;
#use App\Http\Requests\author;
#use App\AuthorModel;
use DB; 

class AuthorController extends Controller
{
    public function author()
	{
		$authors = Authors::all();
	    return view("author", compact('authors'))->render();
	}
	
	public function author_check(Request $request){
		$this->validate($request, [
			'name' => 'required|max:100',
		]);
		
		$author = new Authors;
		$author->name = $request->input('name');
		
		$author->save();
		
		return redirect()->route('author');
	}	
	
	public function edit_author($id)
	{
		$author_id = Authors::find([$id]);
	    return view('edit_author', compact('author_id'))->render();
	    
	}
	
	public function update_author(Request $request)
	{
		$this->validate($request, [
			'name' => 'required|max:100',
		]);
		Authors::where('id' , $request->input('id'))->update([
			'name' => $request->input('name'),
		]);
		return redirect()->route('author');
	}
	
	
	public function delete_author($id)
	{
		$res=Authors::where('id',$id)->delete();
		return redirect()->route('author');
	}
}
