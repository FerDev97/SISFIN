<?php 
$id=$_POST['id'];
include "../config/conexion.php";
$result = $conexion->query("SELECT * from tdepartamento where id_departamento=".$id);
if ($result) {
    while ($fila = $result->fetch_object()) {
            echo $fila->nombre;
        }
    }else{
        echo "Error";
    }

?>