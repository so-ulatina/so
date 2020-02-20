<?php

	$mysqli = new mysqli('localhost', 'user', 'password', 'BD');

	if($mysqli->connect_error){

		die('Error en la conexion' . $mysqli->connect_error);

	}
?>