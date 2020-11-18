
<!--Formulario para entrar, comprueba que los datos del usuario y contraseña, coincidan con los que hay en la bbdd-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>05.2 (Login)</title>
</head>

<body>
<form method="post" action="login.php" name="login_form">
<fieldset>
<legend class="texto">Formulario de acceso</legend>
<label for="nombre" class="texto">Nombre de usuario</label><br>
<input type="text"  name="username" size="15" pattern="[a-zA-Z0-9]+" class="caja" required><br>

<label for="contrasena" class="texto">Contraseña</label><br>
   <input type="password"  name="password" size="15" class="caja" requires><br>

<input type="submit" name="entrar" value="Entrar">
</fieldset>
</form>

</body>
</html>




<?php
 
include('config.php');//Se llama al archivo 'config' para comunicar con la bbdd
session_start();
 
if (isset($_POST['entrar'])) {//Si se pulsa el botón 'entrar'
 
    $username = $_POST['username'];//Se comprueba usuario y contraseña
    $password = $_POST['password'];
 
    $query = $connection->prepare("SELECT * FROM users WHERE USERNAME=:username");//Se hace la consulta a la bbdd
    $query->bindParam("username", $username, PDO::PARAM_STR);
    $query->execute();//Se ejecuta la consulta
 
    $result = $query->fetch(PDO::FETCH_ASSOC);
 
    if (!$result) {//Si elresultado es erróneo se lanza mensaje de error
        echo '<p class="error">Usuario o contraseña erróneos!</p>';
    } else {

        if (password_verify($password, $result['password'])) {//Si la password coincide con el 'user_id' (de la bbdd), se lanza mensaje
            $_SESSION['user_id'] = $result['id'];
            echo '<p class="success">Login correcto!</p>';
        } else {
            echo '<p class="error">Usuario o contraseña erróneos!</p>';
        }
    }
}
 
?>