<?php
	$destino = "victor.saul.ca@gmail.com";
	$edad = $_POST["edad"];
	$caidaCabello = $_POST["caida"];
	$correo = $_POST["correo"];
	$asunto="Resultados de tu test colágeno";

	$contenido = "Tu caso ".$caidaCabello." presenta caida de cabello \nTienes actualmente ".$edad." años de edad./nEquipo colágeno naara";

	mail($destino,$asunto,$contenido);
	header("location:gracias.html");
?>