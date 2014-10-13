<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Blog de Matematicas en Laravel</title>
	{{HTML::style('css/bootstrap.min.css');}}
	{{HTML::style('css/grid.css');}}
</head>
<body>
	<header class="row">
	<div class="logo col-xs-1">
			<figure>
				
			</figure>
	</div>
		<div class="titular col-xs-10">
			<h1 class="titulo">
				Comunidad de Aficionados a la Matematica 
			</h1>
			<div>
				<a class="filtro" href="#" >
					Algebra
				</a>
				@if(!Auth::check())
				<a class="gato pull-right btn btn-default" href="/logear" >
					 Ingresar
				</a>
				@else
				<a class="gato pull-right btn btn-default" href="/logout" >
					 Cerrar
				</a>
				@endif
			</div>
		</div>
		<div class="usuario col-xs-1">  
			<figure class="avatar">
				
			</figure>
			<a href="#" class="flechita">
				
			</a>
		</div>
	</header>
	<nav>
		<ul class="menu nav nav-tabs">
			<li><a href="#">Calculo</a></li>
			<li><a href="#">Algebra</a></li>
			<li><a href="#">Ec. Difernciales</a></li>
			<li><a href="#">Aritmetica</a></li>
			<li><a href="#">Analisis Vectorial</a></li>
			<li><a href="#">Variable Compleja</a></li>
			<li><a href="#">Analisis Numerico</a></li>
		</ul>
	</nav>
	@if(Auth::check())
		<nav>
  			<ul class="menu nav nav-tabs">
    		<li><a href="#">Articulos</a></li>
    		<li><a href="/articles">Todos</a></li>
    		<li><a href="/articles/create">Nuevo</a></li>
  		</ul>
	</nav>
	@endif
<section class="posts row">
		
		@yield('articles')
		
		@yield('content')
		
	</section>
        
	<footer class="text-center">
		<h3>
			<strong>Calculus</strong>
			<span class="mejor">
				 2013
			</span>
		</h3>
	</footer>
</body>
</html>