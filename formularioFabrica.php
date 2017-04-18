<!DOCTYPE html>
<html>


  <head>
    <!--MATERIALIZE CSS-->
      <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
      <!-- Compiled and minified JavaScript -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
            
    <link type='text/css' rel='stylesheet' href='style.css'/>

    <script  type ='text/javascript' src="js_form.js"></script>
    <script  type ='text/javascript' src="js_comun.js"></script>
    <title>PHP!</title>
  </head>


  <body>
  <div id="navbar"></div>

    <div class="row">
    <form class="col s12 l8 offset-l2">
      <div class="row">
      <!--Marca-->
        <div class="input-field col s6">
          <input id="marca" type="text" class="validate">
          <label for="marca">Marca</label>
        </div>
      <!--Modelo-->
        <div class="input-field col s6">
          <input id="modelo" type="text" class="validate">
          <label for="modelo">Modelo</label>
        </div>
      </div>

      <!--Precio-->
      <div class="row">
        <div class="input-field col s12">
          <input id="precio" type="text" class="validate">
          <label for="precio">Precio</label>
        </div>
      </div>

      <!--Potencia-->
      <div class="row">
          <div class="input-field col s6">
          <input id="potencia" type="text" class="validate">
          <label for="potencia">Potencia</label>
        </div>
      </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 m6">
            <select class="icons">
              <option value="" disabled selected>Colores disponibles</option>
              <option value="" data-icon="images/sample-1.jpg" class="left circle">example 1</option>
              <option value="" data-icon="images/office.jpg" class="left circle">example 2</option>
              <option value="" data-icon="images/yuna.jpg" class="left circle">example 3</option>
            </select>
         </div>
      </div>
    </form>
  </div>
  </body>
  </html>