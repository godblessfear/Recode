@extends('layot')

@section('header')
Добавление книги
@endsection

@section('main_content')
<h1>Добавление книги</h1>
@if($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif
@foreach($booksss as $book)
<form method="POST" action="/books/update/{{$book->id}}" id='forms' name='forms'>
{{ csrf_field() }}
<input type="hidden" id="id" name="id" value="{{ $book->id }}">
    <p>Название книги</p>
    
    <input type="text" name="name" id='name' class="form-control" value='{{ $book -> name }}'><br>
    <p>Автор</p>
	<select class="form-select" aria-label="Default select example" name='author' id='author' value='{{ $book-> author }}'>
	    @foreach (App\author::all() as $author)
	    @if($author->name == $book->author)
	    {
	        <option selected value='{{$author->name}}' id='{{$author->id}}'>{{$author->name}}</option>
	    }
	    @else
	    {
	        <option value='{{$author->name}}' id='{{$author->id}}'>{{$author->name}}</option>
	    }
	    @endif
	    @endforeach
      
    </select>
    <br>
	<p>Год выхода</p>
	<input type="date" name="date" id='date' class="form-control" value='{{ $book -> date }}'><br><br>
    @endforeach
	
	
	<button type="sumbit" class='btn btn-success'>Обновить</button>
</form>
@endsection