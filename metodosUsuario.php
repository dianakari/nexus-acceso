<?php

include('conexion.php');
include('mensaje.php');

$opcion=$_REQUEST['opcion'];

switch ($opcion) {
	case 1:
		$municipio=$_REQUEST['municipio'];
		$estado=$_REQUEST['estado'];
		$sql="call Municipios('$municipio', '$estado', @res)";
				$resultado=$conexion->query($sql);

				if ($resultado) {
					mensajes("Municipio seleccionado", "index.php", "ok.png");
				}

				else {
					mensajes("Error al registrar", "index.php", "error.png");
				}
	

	case 2:
		$nom=$_REQUEST['nom'];
		$app=$_REQUEST['app'];
		$apm=$_REQUEST['apm'];
		$municipio=$_REQUEST['municipio'];
		$tel=$_REQUEST['tel'];
		$cel=$_REQUEST['cel'];
		$email=$_REQUEST['correo'];
		$actividad=$_REQUEST['actividad'];
		$interesCom=$_REQUEST['interesCom'];
		$interesVen=$_REQUEST['interesVen'];
		$clave=$_REQUEST['clave'];

		$nomarchivo=$_FILES['foto']['name'];
		$inf=new SplFileInfo($nomarchivo);
		$ext=$inf->getExtension();
		$nombres=$nom.$app.$apm.".".$ext;

		if ($_FILES['foto']["error"]>0) {
			echo "Error: ".$_FILES['foto']['error']."<br>";}
			else {
				move_uploaded_file($_FILES['foto']['tmp_name'],"usuarios/".$_FILES['foto']['name']);
				rename("usuarios/".$nomarchivo, "usuarios/".$nombres);
				$bandera=1;
				}

				$sql="call agregarUsuario('$email', '$clave', '$nom', '$app', '$apm', '$nomarchivo', '$tel', '$cel', '$interesCom', '$interesVen', '$municipio', @res)";
				$resultado=$conexion->query($sql);

				if ($resultado) {
					mensajes("Usuario registrado", "index.php", "ok.png");
				}

				else {
					mensajes("Error al registrar", "index.php", "error.png");
				}

		# code...
		break;

		case 3:
				$email=$_REQUEST['correo'];
				$tipo=$_REQUEST['usuario'];
				if ($tipo=='Administrador'){
					$sql="call cambiarTipo('$email', 'Visitante', @res);";
					$res=$conexion->query($sql);
				}
				else 
				{
					$sql="call cambiarTipo('$email', 'Administrador', @res);";
					$res=$conexion->query($sql);
				}
				header('Location:admonUsuario.php');
				break;

	case 4:
			$actividad=$_REQUEST['actividad'];
			$sector=$_REQUEST['sector'];
			$sql="call agregarActividad('actividad', 'sector', @res)";
			$resultado=$conexion->query($sql);
			if ($res) {
					mensajes("Activdad agregada", "admonActividades.php", "ok.png");
				}

				else {
					mensajes("Error al agregar", "admonActividades.php", "error.png");
				}

	break;

	case 5;
		$actividad=$_REQUEST['actividad'];
			$sector=$_REQUEST['sector'];
			$sql="call eliminarActividad('actividad', 'sector', @res");
			$resultado=$conexion->query($sql);
			if ($res){
				mensajes("Actividad eliminada", "admonActividades.php", "ok.png");
				}

				else {
					mensajes("Error al eliminar", "admonActividades.php", "error.png");
			}
		break;

	case 6;
			$oferta=$_REQUEST['_oferta_idoferta'];
			$usuario=$['_usuario_idusuario'];
			$sql="CALL solicitudVenta('_oferta_idoferta', '_usuario_idusuario',@res)";
			if($res){
				 mensajes("Venta realizada", "solicitudes.php", "ok.png");
			}

			else {
				mensajes("Error al realizar la verta", "solicitudes.php", "error.png");
			}
	default:
		# code...
		break;
}

?>