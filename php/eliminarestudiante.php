<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    require_once 'conexion.php';
    $id = $_POST["id"];
    $my_query = "DELETE FROM estudiante
    WHERE id = '".$id."'";
    $result = $mysql -> query($my_query);
    if($result == true){
        echo "\n Registro eliminado satisfactoriamente...";
    }else{
        echo "Error al eliminado registro...";
    }
}else{
    echo"Error desconocido";
}
?>