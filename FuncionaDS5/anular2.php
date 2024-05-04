<?php 
    include ('conexion.php');
    $Fecha = date('y-m-d', strtotime($_POST["fecha"]));
    $nombre = $_POST['name1'];
    $mensaje_mostrar = $_POST['mensaje_mostrar'];

    if($nombre){
    $sql = "UPDATE cheques SET fecha_circulacion = '$Fecha' where numero_cheque = '$nombre'";

    $sql_query = mysqli_query($est, $sql);
    $mensaje_mostrar++;
    echo"$mensaje_mostrar";
    }else{

    }



?>