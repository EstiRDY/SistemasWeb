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
$tabla="usuarios";
   $conexion = mysql_connect($host, $usuario, $password);
 
if (!$conexion) {
	die('No se ha podido conectar a la base de datos');
}

$subs_email= utf8_decode($_POST['email']); // Coge los datos del formulario a partir de los NAME de los inputs
$subs_pass = utf8_decode($_POST['pass']);
 
$resultado=mysql_query("SELECT * FROM ".$tabla." WHERE email = '".$subs_email."'", $conexion);
 
	//INSERT! 
	//$sentencia_insert = 'INSERT INTO `' . $bd . '`.`'.$tabla.'` (`Modelo` , `Marca`) VALUES ("' . $subs_modelo . '", "' . $subs_marca . '")';
 
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