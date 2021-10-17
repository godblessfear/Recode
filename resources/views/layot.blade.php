<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('header')</title>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
    
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="mb-auto">
    <div>
	<h3 class="float-md-start mb-0">Книжный магазин</h3>
		<div class="dropdown float-md-start mb-0">
	  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
		Список авторов
	  </button>
	  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
	  @foreach (App\Authors::all() as $author)
	  <li><a class="dropdown-item" href="{{$author->name}}">{{$author->name}}</a></li>
	  @endforeach
	  </ul>
	</div>
      
      <nav class="nav nav-masthead justify-content-center float-md-end">
        <a class="nav-link active" aria-current="page" href="/">Главная</a>
        <a class="nav-link" href="/books">Добавить книгу</a>
        <a class="nav-link" href="/author">Добавить автора</a>
      </nav>
    </div>
  </header>
  <main>
@yield('main_content')
	</main>
  <footer class="mt-auto text-white-50">
    <p>Cover template for <a href="https://getbootstrap.com/" class="text-white">Bootstrap</a>, by <a href="https://twitter.com/mdo" class="text-white">@mdo</a>.</p>
  </footer>
</div>


    
  

<div class="betternet-wrapper"></div>
</body>
</html>