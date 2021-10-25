<meta charset="utf-8">
<link href="css/bootstrap.css" rel="stylesheet"> 
<script src="js/bootstrap.js"></script>

<p>--------------------</p>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Modal demostracion
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal Simple</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      Utilice el complemento modal de JavaScript de Bootstrap para agregar diálogos a su sitio para cajas de luz, notificaciones de usuario o contenido completamente personalizado.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CERRAR</button>
        <button type="button" class="btn btn-primary">GUARDAR</button>
      </div>
    </div>
  </div>
</div>

<p>--------------------</p>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Modal Estatico
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal Estatico</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      Utilice el complemento modal de JavaScript de Bootstrap para agregar diálogos a su sitio para cajas de luz, notificaciones de usuario o contenido completamente personalizado.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Comprendido</button>
      </div>
    </div>
  </div>
</div>

<p>--------------------</p>

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalLargo">
  Modal vertical
</button>

<div class="modal fade" id="ModalLargo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Modal Largo</font></font></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body" style="min-height: 1500px">
        <p><font style="vertical-align: inherit;">
        <font style="vertical-align: inherit;">Este es un contenido de marcador de posición para mostrar el comportamiento de desplazamiento de los modales. </font>
        <font style="vertical-align: inherit;">En lugar de repetir el texto del modal, usamos un estilo en línea que establece una altura mínima, extendiendo así la longitud del modal general y demostrando el desplazamiento de desbordamiento. </font>
        <font style="vertical-align: inherit;">Cuando el contenido se vuelve más largo que la altura de la ventana gráfica, el desplazamiento moverá el modal según sea necesario.</font></font></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cerrar</font></font></button>
        <button type="button" class="btn btn-primary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Guardar cambios</font></font></button>
      </div>
    </div>
  </div>
  </div>



  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalLargoDesplazable">
  Modal vertical Desplazable
</button>
<!-- Scrollable modal -->
<div class="modal fade" id="ModalLargoDesplazable" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Modal desplazable</font></font></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body">
        <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Este es un contenido de marcador de posición para mostrar el comportamiento de desplazamiento de los modales. </font><font style="vertical-align: inherit;">Usamos saltos de línea repetidos para demostrar cómo el contenido puede exceder la altura interna mínima, mostrando así el desplazamiento interno. </font><font style="vertical-align: inherit;">Cuando el contenido se vuelve más largo que la altura máxima predefinida del modal, el contenido se recortará y se podrá desplazar dentro del modal.</font></font></p>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Este contenido debería aparecer en la parte inferior después de desplazarse.</font></font></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cerrar</font></font></button>
        <button type="button" class="btn btn-primary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Guardar cambios</font></font></button>
      </div>
    </div>
  </div>
  </div>
  
<p>--------------------</p>

  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalLargoDesplazableC">
  Modal centrado
</button>
<!-- Scrollable modal -->
<div class="modal fade" id="ModalLargoDesplazableC" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal Simple</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      Utilice el complemento modal de JavaScript de Bootstrap para agregar diálogos a su sitio para cajas de luz, notificaciones de usuario o contenido completamente personalizado.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CERRAR</button>
        <button type="button" class="btn btn-primary">GUARDAR</button>
      </div>
    </div>
  </div>
  </div>


  <p>--------------------</p>

  
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModali">
  Modal demostracion
</button>

<div class="modal fade" id="exampleModali" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal Simple</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <div class="modal-body">
    <h5>Popover in a modal</h5>
    <p>This <a href="#" role="button" class="btn btn-secondary popover-test" title="Popover title" data-bs-content="Popover body content is set in this attribute.">button</a> triggers a popover on click.</p>
    <hr>
    <h5>Tooltips in a modal</h5>
    <p><a href="#" class="tooltip-test" title="Tooltip">This link</a> and <a href="#" class="tooltip-test" title="Tooltip">that link</a> have tooltips on hover.</p>
  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CERRAR</button>
        <button type="button" class="btn btn-primary">GUARDAR</button>
      </div>
    </div>
  </div>
</div>

<p>--------------------</p>
 

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalCuadricula">
  Modal cuadricula
</button>

<div class="modal fade" id="ModalCuadricula" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal Simple</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4">.col-md-4</div>
      <div class="col-md-4 ms-auto">.col-md-4 .ms-auto</div>
    </div>
    <div class="row">
      <div class="col-md-3 ms-auto">.col-md-3 .ms-auto</div>
      <div class="col-md-2 ms-auto">.col-md-2 .ms-auto</div>
    </div>
    <div class="row">
      <div class="col-md-6 ms-auto">.col-md-6 .ms-auto</div>
    </div>
    <div class="row">
      <div class="col-sm-9">
        Level 1: .col-sm-9
        <div class="row">
          <div class="col-8 col-sm-6">
            Level 2: .col-8 .col-sm-6
          </div>
          <div class="col-4 col-sm-6">
            Level 2: .col-4 .col-sm-6
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CERRAR</button>
        <button type="button" class="btn btn-primary">GUARDAR</button>
      </div>
    </div>
  </div>
  </div>
  <p>--------------------</p>

  <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel">Modal 1</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      Muestre un segundo modal y oculte este con el botón de abajo.
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Abrir segundo modal</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel2">Modal 2</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      Oculte este modal y muestre el primero con el botón de abajo.
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Volver al primero</button>
      </div>
    </div>
  </div>
</div>
<a class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Alternar modales</a>




  <p>--------------------</p>


  
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">Contacta con nosotros</button>
  <div class="modal" id="myModal">
  <div class="modal-dialog">
  <div class="modal-content">
     <div class="modal-header">
    <h5 class="modal-title">Comunicate con nosotros</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
    </div>
    <div class="modal-body">
    <form>
      <div class="mb-3">
      <label class="form-label required">Nombre</label>
      <input type="text" class="form-control">
      </div>
      <div class="mb-3">
      <label class="form-label required">Email</label>
      <input type="email" class="form-control">
        </div>
        <div class="mb-3">
          <label class="form-label required">Escriba su mensaje aqui</label>
          <textarea class="form-control"></textarea>
          </div>
    </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Enviar</button>
      </div>
          </div>
      </div>
 </div>
    





