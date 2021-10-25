<!-- -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIST GROUP</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    
</head>
<body>

<div class="container">

  <h1 class="text-center bg-success text-white">GRUPO DE LISTAS <small>Ejemplos</small> </h1>
  <h2>CREAR</h2>
  <h3>Primera Forma</h3>
  <!--PRIMERA FORMA -->
  <ul class="list-group">
    <li class="active list-group-item">Elemento de Lista 1  </li>
    <li class="list-group-item">Elemento de Lista 2</li>
    <li aria-disabled="true" class="disabled list-group-item">Elemento de Lista 3</li>
  </ul>
  <h3>Segunda Forma</h3>
  <!--SEGUNDA FORMA -->
  <div class="list-group">
    
    <a href="#" class="active list-group-item list-group-item-action">Lista de Ancla</a>
    <a href="#" class="list-group-item list-group-item-action">Lista de Ancla</a>
    <a href="#" aria-disabled="true" class="disabled list-group-item list-group-item-action">Lista de Ancla</a>

  </div>
   <h2>ELIMINAR BORDES</h2>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">Elemento de Lista 1</li>
      <li class="list-group-item">Elemento de Lista 2</li>
      <li  class="list-group-item">Elemento de Lista 3</li>
    </ul> 
    <div class="list-group list-group-flush">
      <a href="#" class="list-group-item list-group-item-action">Lista de Ancla</a>
      <a href="#" class="list-group-item list-group-item-action">Lista de Ancla</a>
      <a href="#" class="disabled list-group-item list-group-item-action">Lista de Ancla</a>
    </div>

    <hr/>
    <h2>Orientacion Horizontal</h2>
    <ul class="list-group list-group-horizontal">
      <li class="list-group-item">Elemento de Lista 1</li>
      <li class="list-group-item">Elemento de Lista 2</li>
      <li  class="list-group-item">Elemento de Lista 3</li>
    </ul>
    <div class="list-group list-group-horizontal">
      <a href="#" class="list-group-item list-group-item-action">Lista de Ancla</a>
      <a href="#" class="list-group-item list-group-item-action">Lista de Ancla</a>
      <a href="#" class="disabled list-group-item list-group-item-action">Lista de Ancla</a>
    </div>

    <H2>Colores de Fondo</H2>
    <ul class="list-group">
      <li class="list-group-item-primary text-white">Elemento de lista 1</li>
      <li class="list-group-item-secondary">Elemento de lista 2</li>
      <li class="list-group-item-success">Elemento de lista 3</li>
    </ul>
    <div class="list-group">
      <a href="#" class="list-group-item-danger">Lista de Ancla</a>
      <a href="#" class="list-group-item-warning">Lista de Ancla</a>
      <a href="#" class="list-group-item-info">Lista de Ancla</a>
    </div>
    <hr />

    
</div>



<script src="js/bootstrap.js"></script>
</body>
</html>