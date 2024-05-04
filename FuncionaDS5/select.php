<?php
    include ("conexion.php");
    $nombre= $_POST['name'];
    $sql = "SELECT * FROM cheques WHERE numero_cheque='$nombre'";

    $sql_query = mysqli_query($est, $sql);
    
        

    while($row = mysqli_fetch_assoc($sql_query)){
        $beneficiario2 = $row['beneficiario'];
        $sql2 = "SELECT * FROM proveedores where codigo = '$beneficiario2'";
        $sql_query2 = mysqli_query($est, $sql2);

        while($row2 = mysqli_fetch_array($sql_query2)){
        $nombre = $row2['nombre'];

    }
        echo "<label>FECHA</label>";
        echo "<input type='text' name='input2' id='input2' disabled value='" . $row['fecha']. "'>";
        echo '<label>Paguese a la orden</label>';
        echo "<input type='text' name='input3' disabled value='" . $nombre. "'>";
        echo "<label>La suma de</label>";
        echo "<input type='text' name='input4' id='input4' value='" . $row['monto'] . "'>";
        echo '<label>Descripcion de gasto</label>';
        echo "<input type='text' name='input5' disabled value='" . $row['descripcion'] . "'>";

    }
    
    

    
    
    


                            
                            
?>