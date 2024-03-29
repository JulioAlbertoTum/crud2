<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel CRUD</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">

	<style>
		body {
			width: 650px;
			margin: 50px auto;
		}
		.badge {
			float: right;
		}
	</style>
</head>
<body>
	<h1>CRUD en Laravel 4</h1>
	<nav class="navbar navbar-default" role="navigation">
  		<div class="container-fluid">
  			<div class="navbar-header">
				<a class="navbar-brand" href="#">Usuarios</a>
  			</div>
    		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      			<ul class="nav navbar-nav">
        			<li class="active"><a href="/users">Todos</a></li>
        			<li><a href="/users/create">Nuevo</a></li>
        		</ul>
        	</div>
        </div>
    </nav>

	<div class="panel panel-success">
  		<div class="panel-heading">
  			<h4>Lista de usuarios</h4>
  		</div>

  		<div class="panel-body">
    		<table class="table">
				<thead>
					<tr>
						<th>Id</th>
						<th>Nombre</th>
						<th>login</th>
						<th>email</th>
						<th>Acciones</th>
						@foreach($users as $user)
						<tr>
							<td>{{ $user->id}}</td>
							<td>{{ $user->name }}</td>
							<td>{{ $user->username }}</td>
							<td>{{ $user->email }}</td>
							<td>
								<a href="/users/show/{{ $user->id }}"><span class="label label-info">Ver</span></a>
								<a href="/users/edit/{{ $user->id }}"><span class="label label-success">Editar</span></a>
								<a href="{{ url('/users/destroy',$user->id) }}"><span class="label label-danger">Eliminar</span></a>
								<a href="{{ url('/users/impress',$user->id) }}"><span class="label label-warning">Imprimir</span></a>
							</td>
						</tr>
					@endforeach

					</tr>
				</thead>
				<tbody>
					
				</tbody>
			</table>
  		</div>
  	</div>

  
</body>
</html>