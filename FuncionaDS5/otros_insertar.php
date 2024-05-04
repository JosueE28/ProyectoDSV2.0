<?php 
    include('conexion.php');


    $fecha = date('y-m-d',strtotime($_POST['fecha']));
    $select = $_POST['select'];
    $monto = $_POST['monto'];
    $mensaje = 0;

    $sql = "INSERT INTO otros (transaccion, fecha, monto) values('$select', '$fecha', '$monto')";
    $sql_query = mysqli_query($est, $sql);
    if ($sql_query){
        $mensaje++;
        echo"$mensaje";
    }




?>