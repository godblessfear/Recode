@extends('layot') 

@section('header')

Главная страница

@endsection

@section('main_content')
<div class="album py-5">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
@foreach ($datasss as $book)


      
        <div class="col">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Обложка" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Обложка</text></svg>

            <div class="card-body">
                <h3 class='text-black'>{{$book->name}}</h3>
              <p class="card-text text-black">{{$book->author}}</p>
              
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Купить</button>
                  <a class="btn btn-sm btn-outline-secondary" href='books/edit/{{$book->id}}'>Редактировать</a>
                  <a class="btn btn-sm btn-outline-secondary" href='books/delete/{{$book->id}}'>Удалить</a>
                  <!--<button type="button" class="btn btn-sm btn-outline-secondary">Редактировать</button>-->
                </div>
                <small class="text-muted">{{date('d.m.Y', strtotime($book->date))}}</small>
              </div>
            </div>
          </div>
        </div>

@endforeach
      </div>
    </div>
  </div>
@endsection