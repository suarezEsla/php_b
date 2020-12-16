<?php
include('db.php');

if (isset($_POST['registrarse'])) { //Si se pulsa el botón 'registrarse'
    $user = $_POST['username'];
    $email = $_POST['email'];
    $pass1 = $_POST['pass1'];


    $query = "INSERT INTO usuarios (username,email,contraseña) VALUES ('$user','$email','$pass1')";

    $resultado = mysqli_query($conexion, $query);

    if (!$resultado) {
        die("Fallo en la consulta.");
    }

    $_SESSION['mensaje'] = "Usuario registrado correctamente.";
    $_SESSION['mensaje'] = 'success';

    header('Location: index.php');
}







?>
<!--Registrar-->