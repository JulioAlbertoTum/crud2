<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Laravel CRUD</title>
   <link rel="stylesheet" type="text/css" href="../../css/print.css" media="print" />
  <link rel="stylesheet" href="../../css/bootstrap.min.css" />
  <link rel="stylesheet" href="../../css/bootstrap-theme.min.css" />
 

  <style>
    body {
      width: 450px;
      margin: 50px auto;
      
    }
    .badge {
      float: right;
    }
  </style>

  <style media="print" type="text/css">
      background:red;
      color: blue;
  </style>
</head>
<body>
  <h1>CRUD en Laravel 4</h1>
  <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
        <a class="navbar-brand" href="#">Articulos</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li><a href="/articles">Todos</a></li>
              <li><a href="/articles/create">Nuevo</a></li>
            </ul>
          </div>
        </div>
    </nav>

  <div class="panel panel-success">
      <div class="panel-heading">
        <h4>Información de los articulos</h4>
      </div>

      <div class="panel-body">
        @if (!empty($article))
        <p>
          Titulo: <strong>{{ $article->title }}</strong>
        </p>
        <p>
         Categoria: <strong>{{ $article->category }}</strong>
        </p>
        <p>
         Enlace : <strong>{{ $article->link }}</strong>
        </p>
        <p>
          Votos: <strong>{{ $article->votes }}</strong>
        </p>
        @else
        <p>
          No existe información para éste usuario.
        </p>
        @endif
        <a href="/articles" class="btn btn-default">Regresar</a>
    </div>
  </div>
</body>
</html>
