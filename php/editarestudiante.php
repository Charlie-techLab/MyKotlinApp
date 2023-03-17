<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    require_once 'conexion.php';
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $carrera  = $_POST["carrera"];
    $año = $_POST["año"];
    $id = $_POST["id"];
    $my_query = "UPDATE estudiante

    SET nombre = '".$nombre."', apellido = '".$apellido."', carrera = '".$carrera."', año = '".$año."'
    WHERE id = '".$id."'";
    $result = $mysql -> query($my_query);
    if($result == true){
        echo "\n Registro editado satisfactoriamente...";
    }else{
        echo "Error al editar registro...";
    }
}else{
    echo"Error desconocido";
}
?>


