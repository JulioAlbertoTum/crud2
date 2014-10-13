@extends('layout')



@section('articles')

  <div class="panel-body">
    		<table class="table">
				<thead>
					<tr>
						<th>Id</th>
						<th>Titulo</th>
						<th>Categoria</th>
						<th>Enlace</th>
						<th>Votos</th>
						<th>Acciones</th>
						@foreach($articles as $article)
						<tr>
							<td>{{ $article->id}}</td>
							<td>{{ $article->title }}</td>
							<td>{{ $article->category }}</td>
							<td>{{ $article->link }}</td>
							<td>{{ $article->votes }}</td>
							<td>
								<a href="/articles/show/{{ $article->id }}"><span class="label label-info">Ver</span></a>
								<a href="/articles/edit/{{ $article->id }}"><span class="label label-success">Editar</span></a>
								<a href="{{ url('/articles/destroy',$article->id) }}"><span class="label label-danger">Eliminar</span></a>
								<a href="{{ url('/articles/impress',$article->id) }}"><span class="label label-warning">Imprimir</span></a>
							</td>
						</tr>
					@endforeach
					</tr>
				</thead>
				<tbody>		
				</tbody>
			</table>
  		</div>
@stop