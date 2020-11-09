<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="styles.css">
    <title>Foro (registro)</title>
</head>
<body>
     <form action="registro_foro.php" method="post" name="formulario" >

   <fieldset>
   <legend class="texto">Formulario de registro</legend>
   <label for="nombre" class="texto">Nombre de usuario</label><br>
   <input type="text"  name="username" size="15" pattern="[a-zA-Z0-9]+" class="caja" required><br>

   <label for="email" class="texto">e-mail</label><br>
   <input type="email" name="email" size="15" class="caja" required><br>

   <label for="contrasena" class="texto">Contraseña</label><br>
   <input type="password"  name="password" size="15" class="caja" required><br>

   <label for="repetir" class="texto">Por favor, vuelva a introducir la contraseña</label><br>
   <input type="password"  name="pass2" size="15"  class="caja" required><br>

   <input type="submit" name="register" value="Registrarse"><input type="reset" value="Borrar" name="reset">
   </fieldset>

   </form>
</body>





<?php
//#######################################################################################################################

include('config.php');//Se incluye el archivo 'config.php' de la bbdd
session_start();//Se inicia la sesión
 
if (isset($_POST['register'])) {//Si se ha pulsado el botón 'register, se comprueban los datos introducidos
 
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_hash = password_hash($password, PASSWORD_BCRYPT);//Se hace un password_hash
 
    $query = $connection->prepare("SELECT * FROM users WHERE EMAIL=:email");//Se hace una consulta en la bbdd para ver si el email existe
    $query->bindParam("email", $email, PDO::PARAM_STR);
    $query->execute();//Se ejecuta la consulta
 
    if ($query->rowCount() > 0) {//Si rowCount es mayor que 0, es que el email ya existe, y se lanza un aviso
        echo '<p class="error">Error, el email introducido ya existe en nuestra base de datos!</p>';
    }
 
    if ($query->rowCount() == 0) {//Si rowCount es 0, es que no existe y se hace un 'insert' en la bbdd para introducir los datos en ella
        $query = $connection->prepare("INSERT INTO users(USERNAME,PASSWORD,EMAIL) VALUES (:username,:password_hash,:email)");
        $query->bindParam("username", $username, PDO::PARAM_STR);
        $query->bindParam("password_hash", $password_hash, PDO::PARAM_STR);
        $query->bindParam("email", $email, PDO::PARAM_STR);
        $result = $query->execute();//Se ejecula el 'insert'
 
        if ($result) {
            echo '<p class="success">Registrado correctamente!</p>';
        } else {
            echo '<p class="error">Ha habido algún error!</p>';
        }
    }
}




?>



</html>




  