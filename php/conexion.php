<?php

$mysql = new mysqli("localhost", "root", "", "dbuca");
if($mysql->connect_error){
echo"Error: ";
die("Error de conexion");

}
else{
echo "Conexion exitosa";

}

?>