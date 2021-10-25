<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>DROPDOWN!</title>
  </head>

  <body class="p-5">
    
    <div class="row">
      <div class="col">
       <!--boton SENCILLO-->
      <div class="dropdown">
          <!--boton-->
          <button type="button" class="btn btn-secondary dropdown-toggle" id="simpleDropdown"
              data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
          </button>
          <!--lista-->
          <ul class="dropdown-menu">
              <li><a href="#" class="dropdown-item">Accion1</a></li>
              <li><a href="#" class="dropdown-item">Accion2</a></li>
              <li><a href="#" class="dropdown-item">Accion3</a></li>
          </ul>
      </div>
      </div>
      <!--boton separado-->
      <div class="col">
        <div class="btn group">
          <button type="button" class="btn btn-danger">Dropdown</button>
          <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split"
          data-bs-toggle="dropdown" aria-expanded="false">
          <span class="visually-hidden">Dropdown</span>
        </button>
        <ul class="dropdown-menu">
          <li><a href="#" class="dropdown-item">Accion1</a></li>
          <li><a href="#" class="dropdown-item">Accion2</a></li>
          <li><a href="#" class="dropdown-item">Accion3</a></li>
        </ul>
        </div>
      </div>
      <!--boton oscuro-->
   <div class="dropdown">
  <button type="button" class="btn btn-primary dropdown-toggle"  id="darkbutton" 
  data-bs-toggle="dropdown" aria-expanded="false">
    Dropdown button
  </button>
  <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
    <li><a class="dropdown-item active" href="#">Acion1</a></li>
    <li><a class="dropdown-item" href="#">Accion2</a></li>
    <li><a class="dropdown-item" href="#">Accion3</a></li>
    <li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item" href="#">Separated link</a></li>
  </ul>
</div>
</div>
</div>


    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>