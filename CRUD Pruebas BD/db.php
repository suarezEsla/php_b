<?php

//Conexión a la bbdd
if (!isset($_SESSION)) {
    session_start();
}

$conexion = mysqli_connect(
    'localhost',
    'root',
    '',
    'crud_pruebas'
) or die(mysqli_erro($mysqli));

?>
<!--Conexion-->