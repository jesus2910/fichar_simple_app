<?php 

#Conexion a la BDD, se necesita: servidor, user, pass y base

$conex = mysqli_connect("localhost","root","","yellow");

if ($conex) {

    
}else{

    echo("CONEXION FALLIDA");
    
}
?>
