<?php


/*
A través de phpmyadmin, he creado un nuevo usuario con nombre: esti, contraseña: pass, servidor: localhost y todos los privilegios.
Dan igual el nombre y la contraseña, sólo hace falta que antes de entregarlo nos pongamos de acuerdo en que sean los mismos. 
Creada una base de datos nueva: primeraPrueba
Creada una tabla dentro de esa BD, llamada cochesFabrica, con dos columnas (luego se le pueden añadir más)
*/


$host="localhost";
$usuario="esti";
$password="pass";
$bd="primeraPrueba";
$tabla="cochesFabrica";
   $conexion = mysql_connect($host, $usuario, $password);
 
if (!$conexion) {
	die('No se ha podido conectar a la base de datos');
}

$subs_modelo = utf8_decode($_POST['modelo']); // Coge los datos del formulario a partir de los NAME de los inputs
$subs_marca = utf8_decode($_POST['marca']);
$subs_motor = utf8_decode($_POST['motor']);
$subs_combustible = utf8_decode($_POST['combustible']);
$subs_precio = utf8_decode($_POST['precio']);
$subs_color = utf8_decode($_POST['color']);
 
$resultado=mysql_query("SELECT * FROM ".$tabla." WHERE Modelo = '".$subs_modelo."'", $conexion);
 
	//INSERT! 
	$sentencia_insert = 'INSERT INTO `' . $bd . '`.`'.$tabla.'` (`Modelo` , `Marca`, `Motor`, `Combustible`, `Precio` , `Color` ) VALUES ("' . $subs_modelo . '", "' . $subs_marca . '","' . $subs_motor . '", "' . $subs_combustible . '","' . $subs_precio . '", "' . $subs_color. '")';
 

mysql_select_db($bd, $conexion);
$returns = mysql_query($sentencia_insert, $conexion);
 
if (!$returns) {
   die('Error: ' . mysql_error());
}
 // Si todo va bien muestra esta alerta en el navegador
$mensaje = "ok!!";
echo "<script type='text/javascript'> alert('$mensaje'); </script>";

 
mysql_close($conexion);
		
?>