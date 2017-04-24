<?php



	$mensaje = "entra en el php";
	echo "<script type='text/javascript'> alert('$mensaje'); </script>";

$host="localhost";
$usuario="esti";
$password="pass";
$bd="primeraprueba";
$tabla="cochesfabrica";

   $conexion = mysql_connect($host, $usuario, $password);
 
if (!$conexion) {
	die('No se ha podido conectar a la base de datos');
}
else {
	$mensaje = "conectado a la bd";
	echo "<script type='text/javascript'> alert('$mensaje'); </script>";
}
$subs_modelo = utf8_decode($_GET['modelo']); // Coge los datos del formulario a partir de los NAME de los inputs
$subs_marca = utf8_decode($_GET['marca']);
$subs_motor = utf8_decode($_GET['motor']);
$subs_combustible = utf8_decode($_GET['combustible']);
$subs_color = utf8_decode($_GET['color']);


$resultado = mysql_query("SELECT * FROM ".$tabla." WHERE Modelo = '".$subs_modelo."'" AND "Marca = '".$subs_marca."'" AND "Motor = '".$subs_motor."'" AND "Combustible = '".$subs_combustible."'" AND "Color = '".$subs_color."'", $conexion);
 
 echo $resultado ;


	if (!$resultado)
	{
		$mensaje = "Ese modelo no está disponible";
		echo "<script type='text/javascript'> alert('$resultado'); </script>";
		echo "<script type='text/javascript'> alert('$mensaje'); </script>";
	}
	else{

		$mensaje = "ok";
		echo "<script type='text/javascript'> alert('$resultado'); </script>";
		echo "<script type='text/javascript'> alert('$mensaje'); </script>";
	}

 
mysql_select_db($bd, $conexion);
/*$returns = mysql_query($sentencia_insert, $conexion);
 
if (!$returns) {
   die('Error: ' . mysql_error());
}*/


mysql_close($conexion);

header("Location: formulConcesionario.html" );
exit ;
		
?>