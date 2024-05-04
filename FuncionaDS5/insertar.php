
<?php
    include("conexion.php");
    
   
        $numero_cheque = $_POST["Nocheque"];
        $Fecha = date('y-m-d', strtotime($_POST["fecha"]));
        $beneficiario = $_POST["select1"];
        $lasumade = $_POST["lasuma"];
        $detalles = $_POST["descripcion"];
        $codigo_objeto = $_POST["select2"];
        $monto = $_POST["monto"];

        
            // Cheque no existe, inserta en la base de datos
            $sql_insert = "INSERT INTO cheques (numero_cheque, fecha, beneficiario, monto, descripcion, codigo_objeto1, monto_objeto1)
                VALUES ('$numero_cheque', '$Fecha', '$beneficiario', '$lasumade', '$detalles', '$codigo_objeto', '$monto')";
            $sql_query2 = mysqli_query($est, $sql_insert);

        
    

            
    if(isset($_POST["boton2"])){
        $_POST["Nocheque"] = '';
        $_POST["fecha"] = '';
        $_POST["select1"] = '';
        $_POST["lasuma"] = '';
        $_POST["descripcion"] = '';
        $_POST["select2"] = '';
        $_POST["monto"] = '';
    }

    if(isset($_POST['button'])){
        // Lógica para procesar el formulario asociado a 'button' si es necesario
    }

   
?>
