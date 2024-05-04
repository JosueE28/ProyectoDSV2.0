<?php 
    include ('conexion.php');

    $fecha = $_POST['fecha'];
    $detalle = $_POST['detalles'];
    $nombre = $_POST['name1'];
    $mensaje_mostrar = $_POST['mensaje_mostrar'];

    if($nombre){
    $sql = "UPDATE cheques SET fecha_anulado = '$fecha', 
    detalle_anulado='$detalle' where numero_cheque = '$nombre'";

    $sql_query = mysqli_query($est, $sql);
    $mensaje_mostrar++;
    echo"$mensaje_mostrar";
    }else{

    }



?>