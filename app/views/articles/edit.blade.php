@extends('layout')

@section('articles')
 <div class="panel panel-success">
      <div class="panel-heading">
        <h4>Editar Articulo</h4>
      </div>

      <div class="panel-body">
        @if (!empty($article))
          <form method="post" action="/articles/update/{{ $article->id }}">

          <p>
            <input value="{{ $article->title }}" type="text" name="title" placeholder="Titulo" class="form-control" required>
          </p>
          <p>
            <input value="{{ $article->category }}" type="text" name="category" placeholder="Categoria" class="form-control" required>
          </p>
          <p>
            <input value="{{ $article->link }}" type="text" name="link" placeholder="Enlace" class="form-control" required>
          </p>
            <p>
            <input value="{{ $article->votes }}" type="text" name="votes" placeholder="Votos" class="form-control" required>
          </p>
          <input type="submit" value="Guardar" class="btn btn-success">
          @else
          <p>
            No existe información para éste usuario.
          </p>
          @endif
        <a href="/articles" class="btn btn-default">Regresar</a>
      </form>
    </div>
  </div>

  @if(Session::has('message'))
    <div class="alert alert-{{ Session::get('class') }}">{{ Session::get('message')}}</div>
  @endif
@stop