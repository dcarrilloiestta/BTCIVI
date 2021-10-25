<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Ejemplo</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
    ul{
        width: 250px;
    }
</style>
<body>

<div class="container mt-3">
  <h2>Lista de Grupos con Badges</h2>
  <p>Ejemplo de Lista de Grupos con Insignias:</p>
  <ul class="list-group">
    <li class="list-group-item d-flex justify-content-between align-items-center">
      Mensajes
      <span class="badge bg-primary rounded-pill">12</span>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
      Contactos
      <span class="badge bg-primary rounded-pill">50</span>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
      Grupos
      <span class="badge bg-primary rounded-pill">99</span>
    </li>
  </ul>
</div>

</body>
</html>
