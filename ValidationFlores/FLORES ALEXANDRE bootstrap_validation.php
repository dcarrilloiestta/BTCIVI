<head>
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.css">
</head>


 <!------------------primer estilo    ------------> 
 <h1>Estilos de Validacion de Bootstrap</h1>
<h2>Primer estilo de validacion</h2>
<form class="row g-3 needs-validation" novalidate> 
    
    <div class="col-md-4 position-relative" >
    <label class="form-label">Nombre</label>
    <input class="form-control" type="text" value="Alexandre" required>
    <div class="valid-feedback">
      Validado!
    </div>
    </div>

      <div class="col-md-4 position-relative">
      <label for="validationCustom04" class="form-label">Apellidos</label>
        <input class="form-control" type="text" value="Flores Cruz" required>
        <div class="valid-feedback">
        Valido!
        </div>
      </div>


    <div class="col-md-2 position-relative">
    <label class="form-label">Programa de Estudios</label>
      <select class="form-select" required>
        <option selected disabled value="">Seleccione Carrera</option>
        <option value="Computacion E Informatica">Computacion E Informatica</option>
        <option value="Desarrollo de Sistemas de Informacion">Desarrollo de Sistemas de Informacion</option>
      </select>
      <div class="valid-feedback">
      Seleccione una opcion valida.
      </div>
    </div>

    <div class="col-md-2 position-relative">
    <label class="form-label">Semestre</label>
            <select class="form-select" required>
                <option selected disabled value="">Seleccione Semestre</option>
                <option value="II">II</option>
                <option value="IV">IV</option>
                <option value="VI">VI</option>
            </select>
      <div class="invalid-feedback">
      Seleccione una opcion valida.
      </div>
    </div>

    <div class="col-12">
    <div class="form-check">
    <input class="form-check-input" type="checkbox" value="" required>
    <label class="form-check-label" >
    Aceptar terminos y condiciones
    </label>
    <div class="invalid-feedback">
    Acepta terminos y condiciones.
    </div>
    </div>
    </div>

    <div class="col-12">
    <button class="btn btn-primary" type="submit">Enviar Formulario</button>
    </div>
    
</form>
<!---------------otros componentes-------------->
<h2>Otros Controles y componentes que soportan los estilos de validacion</h2>
  <form class="was-validated">
  <div class="mb-3" >
    <label class="form-label">Componente Textarea</label>
    <textarea class="form-control is-invalid"  placeholder="Ingrese texto" required></textarea>
    <div class="invalid-feedback">
      Por favor ingrese un texto
    </div>
  </div>

  <div class="form-check mb-3">
    <input type="checkbox" class="form-check-input" required>
    <label class="form-check-label" >Computacion E Informatica</label>
    <div class="invalid-feedback">Marque la opcion</div>
  </div>

  <div class="form-check">
    <input type="radio" class="form-check-input" name="radio-stacked" required>
    <label class="form-check-label">Verdadero</label>
  </div>
  <div class="form-check mb-3">
    <input type="radio" class="form-check-input"  name="radio-stacked" required>
    <label class="form-check-label" >Falso</label>
    <div class="invalid-feedback">Selecciona una opcion</div>
  </div>

  <div class="mb-3 position-relative" >
    <input type="file" class="form-control" aria-label="file example" required>
    <div class="invalid-tooltip">Necesita subir un achivo</div>
  </div>

  <div class="mb-3">
    <button class="btn btn-primary" type="submit">Enviar Formulario</button>
  </div>


  </form>


 <!------------------segundo estilo    ------------> 
<h2>Segundo estilo de validacion</h2>
  <form class="row g-3 needs-validation" novalidate> 
    
    <div class="col-md-4 position-relative" >
    <label class="form-label">Nombre</label>
    <input class="form-control" type="text" value="Alexandre" required>
    <div class="valid-tooltip">
      Valido!
    </div>
    </div>

      <div class="col-md-4 position-relative">
      <label for="validationCustom04" class="form-label">Apellidos</label>
        <input class="form-control" type="text" value="Flores Cruz" required>
        <div class="valid-tooltip">
        Valido!
        </div>
      </div>


    <div class="col-md-2 position-relative">
    <label class="form-label">Programa de Estudios</label>
      <select class="form-select" required>
        <option selected disabled value="">Seleccione Carrera</option>
        <option value="Computacion E Informatica">Computacion E Informatica</option>
        <option value="Desarrollo de Sistemas de Informacion">Desarrollo de Sistemas de Informacion</option>
      </select>
      <div class="invalid-tooltip">
      Seleccione una opcion valida.
      </div>
    </div>

    <div class="col-md-2 position-relative">
    <label class="form-label">Semestre</label>
            <select class="form-select" required>
                <option selected disabled value="">Seleccione Semestre</option>
                <option value="II">II</option>
                <option value="IV">IV</option>
                <option value="VI">VI</option>
            </select>
      <div class="invalid-tooltip">
      Seleccione una opcion valida.
      </div>
    </div>

    <div class="col-12">
    <div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
    <label class="form-check-label" for="invalidCheck">
    Aceptar terminos y condiciones
    </label>
    <div class="invalid-feedback">
    Acepta terminos y condiciones.
    </div>
    </div>
    </div>

    <div class="col-12">
    <button class="btn btn-primary" type="submit">Enviar Formulario</button>
    </div>
  </form>
<script>
  
// Ejemplo de JavaScript de inicio para deshabilitar el envío de formularios si hay campos no válidos
(function () {
  'use strict'

  // Obtener todos los formularios a los que queremos aplicar estilos de validación de Bootstrap personalizados
  var forms = document.querySelectorAll('.needs-validation')
   
  // Bucle sobre ellos y evitar la presentación
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
</script>