<?php

include("con_db.php");



if (isset($_POST['enviar'])) {
    
   

    if (!empty($_POST['hora_entrada']) && !empty($_POST['hora_salida']) ) {

        $cod_trabajador = ($_POST['select']);
        $entrada = (($_POST['hora_entrada']));
        $salida = (($_POST['hora_salida']));
        $fecha = (date('Y-m-d H:i:s'));
        
        $query_fichar = "INSERT INTO horarios(cod_trabajador,entrada,salida,fecha) VALUES ('$cod_trabajador','$entrada','$salida','$fecha')";
        $query_horas= mysqli_query($conex, $query_fichar);
    
        #echo($query_fichar);

        if ($query_horas) {

            echo("<div class='alert alert-success' role='alert'><p> ✔️¡Has fichado correctamente!<p></div>");

        }else{

        
            echo("<div class='alert alert-danger' role='alert'><p> ❌¡ERROR BDD!</p></div>".mysqli_error($conex));
            
        }

    }else{

        echo("<div class='alert alert-danger' role='alert'><p> ❌¡Por favor rellena todos los campos!</p></div>");
    }

}
mysqli_close($conex)
?>

