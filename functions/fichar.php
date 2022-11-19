<?php

include("con_db.php");



if (isset($_POST['enviar'])) {
    
    header("location:index.php");
    return;
   

    if (!empty($_POST['hora_entrada']) && !empty($_POST['hora_salida']) ) {

        $cod_trabajador = ($_POST['select']);
        $entrada = (($_POST['hora_entrada']));
        $salida = (($_POST['hora_salida']));
        $fecha = (date('Y-m-d H:i:s'));
        
        $query_fichar = "INSERT INTO horarios(cod_trabajador,entrada,salida,fecha) VALUES ('$cod_trabajador','$entrada','$salida','$fecha')";
        $query_horas= mysqli_query($conex, $query_fichar);

        #echo($query_fichar);

        if ($query_horas) {

            ?> 
                <div class='alert alert-success alert-dismissible fade show' role='alert'><p>✔️¡Has fichado correctamente!<p></div>
            <?php
            

        }else{

            echo("<div class='alert alert-danger alert-dismissible fade show' role='alert'><p>❌¡ERROR BDD!</p></div>".mysqli_error($conex));
            
        }

    }else{

        ?>
        <div class='alert alert-danger alert-dismissible fade show' role='alert'><p>❌¡Rellena todos los campos, porfavor!<p></div>
        <?php
        
    }

}
mysqli_close($conex)
?>

