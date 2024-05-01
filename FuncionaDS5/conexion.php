<?php
$host = "localhost";
$user = "d52024";
$pass = "12345";
$db = "computo";
$port ="3307";
$est = mysqli_connect ($host, $user, $pass, $db, $port);
if ($est->connect_errno) {
     die(utf8_decode("Fallo la conexión a MySQL: " . $est->connect_errno . " " . mysqli_connect_error()));
} else{
	echo("conectado");
	
}
$est -> set_charset('utf8');
?>