<?php

$conexion= new mysqli("localhost", "root", "", "dbnexuss");
mysqli_query($conexion, "SET NAMES 'utf8'");
if (!$conexion){
	echo ("fallo en la conexión a la BD");
}
?>