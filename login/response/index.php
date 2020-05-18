<?php 
session_start();
include('../../config/conexion_bd.php');

//if (!session_status() == 2) {
		//@session_start();
	//}

	if (isset($_SESSION['autenticado'])) {
		header("location:../../index.php"); 
	} else { 
		$_SESSION['autenticado'] = 1;
		$_SESSION['nombre'] = "Nombre Apellido";
		$_SESSION['cuil'] = "20301234566";


		$sql_check = "SELECT id FROM usuarios WHERE cuil='".$_SESSION['cuil']."'";
		$result = $bd->query($sql_check);
		$row = $result->fetchAll(PDO::FETCH_ASSOC); 

		if (empty($row)){
			$sql_insert = "INSERT INTO usuarios (cuil, nombre) VALUES ('".$_SESSION['cuil']."','".$_SESSION['nombre']."')";
			$bd->query($sql_insert);


			$sql_get_id_inserted = "SELECT id FROM usuarios WHERE cuil='".$_SESSION['cuil']."'";
			$result = $bd->query($sql_get_id_inserted);
			$row_id = $result->fetchAll(PDO::FETCH_ASSOC); 

			$sql_log = "INSERT INTO log_autenticacion (id_usuario) VALUES (".$row_id[0]['id'].")";
			$bd->query($sql_log);
		} else {
			$sql_log = "INSERT INTO log_autenticacion (id_usuario) VALUES (".$row[0]['id'].")";
			$bd->query($sql_log);
		}


		header("location:../../index.php");
	} ?>

 ?>