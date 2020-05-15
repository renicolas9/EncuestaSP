<?php 
//include('config/conexion_bd.php');

?>

<!DOCTYPE HTML>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Encuesta Software Público</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript"  src="js/jquery.min.js"></script>
	<script type="text/javascript"  src="js/script.js"></script>
</head> 
	<body>
		<header>
			<div class="container">
				<img class="logo" src="img/logo_gba.svg" alt="logo">
			<?php include('nav.php'); ?>
			</div>
		</header>

		<div class="banner">
			<div class="container">
				<h4>Encuesta <strong>Software Público</strong></h4>
				<img src="img/logosp_peq.png" alt="logo_sp">
				<div class="descripcion-breve">
					<p>Descripción breve.</p>
				</div>
				<div class="botones-banner">
					<a href="#">MANUAL</a>
					<a href="#">COMENZAR</a>
				</div>
			</div>
		</div>

		<div class="user-logged ">
			<div class="container clearfix">
				<div class="left"><p>Usuario autenticado: [nombreUsuario], [CUIT/CUIL]</p></div>
				<div class="right"><a href="#" id="forms-usuario">Formularios enviados</a></div>

			</div>
			<?php include('formularios_enviados.php'); ?>
		</div>
		
		<div class="back-loading" style="display: none;">
			<!-- <div class="center-loading"> style="display: none;" -->
			<div class="loading">
				<a href="#" id="close-screen" style="display: none;"><img src="img/cancelar.png" alt="exit" ></a>
				<div class="lds-default" id="img-load"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
				<p id="encabezado" style="display: none;"></p>
				<img src="img/comprobar.png" alt="success" id="img-successWS" style="display: none;">
				<img src="img/cerrar.png" alt="error" id="img-errorWS" style="display: none;">
				<p id="responseWS"><strong>Enviando respuesta...</strong></p><br>
			</div>
			<!-- </div> -->
		</div>

		<div class="background">
			<main>	
				<div class="container">
					<div class="container-form">
						<?php include('forms/form_encuesta.php'); ?>

					</div>
				</div>
			</main>
		</div>

		<?php include('footer.php'); ?>
	</body>
</html>
