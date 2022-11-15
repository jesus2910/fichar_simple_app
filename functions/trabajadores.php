<?php 
include("con_db.php");

$query_trabajadores = "SELECT * FROM trabajadores WHERE status = '1'";

$datos= mysqli_query($conex, $query_trabajadores)
?>

<div class="custom_select mb-5">
	<select name="select" class="form-select" required">
<?php

    while($mostrar=mysqli_fetch_array($datos)){

        echo "<option value=".$mostrar[id_trabajador].">".$mostrar[nombre]."</option>";

    }
?>
	</select>
<?php   
    mysqli_close($conex)
?>
</div>


