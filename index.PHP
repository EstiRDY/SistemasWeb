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
  <!--Esta debería ser la pantalla de búsqueda-->
    <!--Formulario de búsqueda-->
    <form action="buscar.php" method="get">
      <input type="text" name="modelo" placeholder="modelo">  
      <input type="text" name="marca" placeholder="marca">
      <button type="submit">ENVIAR</button>
    </form>
  </body>
  </html>