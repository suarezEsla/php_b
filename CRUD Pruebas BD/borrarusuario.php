<?php
include('db.php');

if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $query = "DELETE FROM usuarios WHERE id=$id";

    $resultado = mysqli_query($conexion, $query);

    if (!$resultado) {
        die("Fallo en el borrado. ");
    }

    header('Location: index.php');
}
