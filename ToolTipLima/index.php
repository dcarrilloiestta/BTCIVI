<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap tooltip</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <link rel="stylesheet" href="css/bootstrap.min.css">

</head>
<body>

<div class="container text-center mt-5">
<h1>Tooltip Ejemplo</h1>
<h2>Un tooltip proporciona información extra cuando el usuario pasa el cursor sobre un elemento.</h2>
<br><br><br>

<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="SUPERIOR">
  lado superior
</button>
<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="DERECHA">
lado derecho
</button>
<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="bottom" title="INFERIOR">
lado inferior
</button>
<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="left" title="IZQUIERDA">
lado izquierdo
</button>
<br><br><br>

  <ul class="list-inline">
    <li><a class="test" href="#" data-toggle="tooltip" data-placement="top" title="saludo!">hola mundooooooooo</a></li>
  </ul>

<div class="container pt-5 mt-5">
  <img src="descarga.jpg" alt="" class="img-fluid" width="150px" data-toggle="tooltip" data-placement="top" title="logo del CBT">
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script> src="js/bootstrap.min.js"</script>

<script>
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
</body>
</html>