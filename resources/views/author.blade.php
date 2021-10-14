@extends('layot')

@section('header')
Добавление книги
@endsection

@section('main_content')
<h1>Добавление автора</h1>
@if($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif
<form method="POST" action="author/check" id='forms' name='forms'>
{{ csrf_field() }}
    <p>Имя автора</p>
	<input type="text" name="name" id='name' class="form-control"><br>
	<button type="sumbit" class='btn btn-success'>Отправить</button>
</form>
<br>
<br>
<table class="table">
      <tbody>
	  <tr>
        <th>ID</th>
        <th>Название</th>
        <th>Действия</th>
      </tr>
      @foreach($authors as $author)
      <tr>
        <th>{{$author->id }}</th>
        <th>{{$author->name }}</th>
        <th><a href="author/edit/{{$author->id}}" role="button" class="btn btn-success">Редактировать</a><a href="author/delete/{{$author->id}}" role="button" class="btn btn-danger">Удалить</a></th>
      </tr>
      @endforeach
      </tbody>
</table>
@endsection