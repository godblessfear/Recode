@extends('layot')

@section('header')
Добавление книги
@endsection

@section('main_content')
<h1>Изменение автора</h1>
@if($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif
@foreach($author_id as $author)
<form method="POST" action="/author/update" id='forms' name='forms'>
    {{ csrf_field() }}
    <input type="hidden" id="id" name="id" value="{{$author->id}}">
    <p>Имя автора</p>
	<input type="text" name="name" id="name" class="form-control" value='{{$author->name}}'><br>
	<button type="sumbit" class='btn btn-success'>Обновить</button>
</form>
@endforeach
@endsection