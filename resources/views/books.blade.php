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
<form method="POST" action="books/check" id='forms' name='forms'>
{{ csrf_field() }}
    <p>Название книги</p>
	<input type="text" name="name" id='name' class="form-control"><br>
	<p>Автор</p>
	<select class="form-select" aria-label="Default select example" name='author' id='author'>
      @foreach ($authors as $author)
	    <option value='{{$author->name}}' id='{{$author->id}}'>{{$author->name}}</option>
	    @endforeach
    </select>
    <br>
	<p>Год выхода</p>
	<input type="date" name="date" id='date' class="form-control"><br><br>
	<button type="sumbit" class='btn btn-success'>Отправить</button>
</form>
@endsection