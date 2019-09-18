@extends('books.layaout')


@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-custom">
  <a class="navbar-brand" href="#">EBook</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('books.index')}}">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
</nav>
<h1 class="text-center">Libros</h1>
<div class="container">
  <a class="btn btn-info mb-3" href="{{ route('books.create')}}">Agregar libros</a>
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Título</th>
      <th scope="col">Reseña</th>
    </tr>
  </thead>
  <tbody>
    @foreach($books as $book)
    <tr>
        <th scope="row">{{ $book->id}}</th>
        <td>{{ $book->title}}</td>
        <td>{{ $book->description}}</td>
        
    </tr>
    @endforeach
  </tbody>
</table>

{{ $books->links() }}
</div>
@endsection