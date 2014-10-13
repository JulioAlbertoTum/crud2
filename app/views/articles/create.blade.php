@extends('layout')


@section('articles')
<div class="panel panel-success">
  		<div class="panel-heading">
  			<h4>Nuevo Articulo</h4>
  		</div>

  		<div class="panel-body">
  			<form method="post" action="store">
				<p>
					<input type="text" name="title" placeholder="Titulo" class="form-control" required>
				</p>
				<p>
					<input type="text" name="category" placeholder="Categoria" class="form-control" required>
				</p>
				<p>
					<input type="text" name="link" placeholder="Enlace" class="form-control" required>
				</p>
				<p>
					<input type="submit" value="Guardar" class="btn btn-success">
				</p>
			</form>
		</div>
	</div>

	@if(Session::has('message'))
		<div class="alert alert-{{ Session::get('class') }}">{{ Session::get('message')}}</div>
	@endif
 
@stop