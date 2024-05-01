<?php
$host = "localhost";
$user = "d52024";
$pass = "12345";
$db = "conciliacion";
$port ="3307";
$est = mysqli_connect ($host, $user, $pass, $db, $port);
if ($est->connect_errno) {
     die(utf8_decode("Fallo la conexión a MySQL: " . $est->connect_errno . " " . mysqli_connect_error()));
} else{
	
	
}
$est -> set_charset('utf8');
?>