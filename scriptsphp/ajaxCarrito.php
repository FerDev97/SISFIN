<?php 
$id=$_POST['id'];
$op=$_POST['op'];
$cantidadDeseada=$_POST['cantidadDeseada'];
// echo "ID:".$id."-OP:".$op."Cantidad Deseada:".$cantidadDeseada;

// Primero validamos si existe en el carrito el producto que queremos agregar
include "../config/conexion.php";
$result = $conexion->query("SELECT * from tcarrito where id_producto=".$id);
if ($result->num_rows==0) {
    //Cuando no exista ese producto, entonces se va a agrregar a ala tabla temporal
    // echo "No existe ese  producto, agregara en tcarrito";
     $consulta  = "INSERT INTO tcarrito VALUES('null','".$id."','".$cantidadDeseada."')";
    $resultado = $conexion->query($consulta);
      if ($resultado) {
          echo "Se agregó al carrito correctamente.";
      } else {
          echo "Ocurrio un error al agregar los datos al carrito.";
      }
    }else{
        //Cuando ya exista, nada amas se va a actualizar la cantidad que se desea
      
        $consulta  = "UPDATE tcarrito set cantidad='" . $cantidadDeseada . "' where id_producto='" . $id . "'";
        $resultado = $conexion->query($consulta);
   
      if ($resultado) {         
           echo "Se modifico la cantidad deseada exitosamente.";
      } else {
          echo "Error al modificar la cantidad deseada";
      }
    }


?>