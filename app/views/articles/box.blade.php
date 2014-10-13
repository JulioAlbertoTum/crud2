@extends('layout')

@section('articles')
				@foreach($articles as $article)
	<div class="col-sm-6">
	<article class="post">
		<div class="descripcion row">
				<figure class="imagen col-xs-3"></figure>
				
				<div class="detalles col-xs-9">
					<h2 class="titulo">
						{{ $article->title}}
					</h2>
					<p class="autor">
						enlace <a href="#">{{ $article->link }}</a>
					</p>
					<a href="#" class="tag btn btn-default">{{ $article->category }}</a>
					<p class="fecha pull-right">hace <strong>20</strong> min</p>
				</div>
		</div>
			
		<div class="acciones">
				<div class="votos">
					<a href="#" class="up"></a>
					<span class="total pull-left">{{ $article->votes }}</span>
					<a href="#" class="down"></a>
				</div>

				<div class="datos">
					<a href="#" class="comentarios pull-right btn btn-primary">
						10
					</a>
					<a href="#" class="estrellita"></a>
				</div>
		</div>
	</article> 
	</div>
		@endforeach
@stop