<!DOCTYPE HTML>
<html lang = "ES">
<head>
	<meta charset = "UTF-8">
	<script src = "lib/jquery/jquery-1.7.2.min.js"></script>
	<script src = "js.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="css/style-narrador.css">
	<title>Narración</title>
</head>

<body>
<div id="header">
<div id="container">
<div id = "wrapper">

<select>
<?php
include '../../util/ajax_response.php';
include 'equipos.php';
echo cargar_equipos();
?>
</select>

			<button id = "iniciar"> Iniciar </button>
			<button id = "pausar"> Pausar </button>
			<button id = "finalizar"> Finalizar </button>

			<br>

			<select>
				<option> --Selecciona Evento-- </option>
			</select>

			<br>

			<textarea id = "comentario">
				
			</textarea>

			<br>
			<button id = "enviar"> Enviar </button>
			
		</div>
</div>
</div>
</body>
</html>
