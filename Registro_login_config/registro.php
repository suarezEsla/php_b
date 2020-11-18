<!-- 2.  Realizar el programa registrar.php que sirva para dar de alta usuarios en el sistema.
 El programa mostrará un formulario donde se solicitará un nombre, un correo electrónico y la contraseña dos veces.
  El programa comprobará que ningún campo está vacío que el correo tiene un valor correcto de email
   y que los dos valores de la contraseña coinciden.

La contraseña tiene que ser segura para ello tiene que cumplir las siguiente reglas:
1º Tamaño  igual o superior a 8 caracteres en total.
2º Contiene  caracteres alfabéticos donde hay mayúsculas o minúsculas (una como mínimo de cada).
3º Contiene algún dígito.
4º Contiene algún carácter no alfanumérico ni dígito ni alfabético.

El programa mostrará en mensaje: Usuario registrado o error indicado el tipo de error producido debido a que falta un datos, 
la contraseñas no coinciden o no cumplen alguna de las reglas de seguridad.
Nota: Si es posible el chequeo también se hará, por lo menos lo más sencillo, en la parte cliente (javascripts) -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>05.2 (Registro)</title>
</head>




<body>

   <form action="registro.php" method="post" name="formulario" >

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

<?php
//Comprobar si las contraseñas son válidas según requerimientos
// No hay valores vacios


foreach ($_POST as $clave => $valor) {
    if (estaVacio($valor)){
        echo "El campo $clave esta vacio ";
        exit;
    }
   }
// No es un email
if ( !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        echo " No es un email correcto. ";
        exit;
}

// Validando contraseña

if (  $_POST['password'] != $_POST['pass2'] ){
    echo " Las contraseñas deben ser iguales ";
    exit;
}

$clave = $_POST['password'];
if (  strlen($clave) < 8 ){
    echo "Tamaño de la contraseña debe ser igual o superior a 8 caracteres en total";
    exit;
}

if ( !hayMayusculas($clave) || !hayMinusculas($clave)){
    echo " Debe haber mayúsculas y minúsculas. ";
    exit;
}
if ( !hayDigito($clave)){
    echo " Debe haber algun dígito.";
    exit;
}

if ( !hayAlfanumerico($clave)){
    echo " No hay nigún caracter no alfanumérico ";
    exit;       
}
 
echo " Sus datos son correctos. <br> ";



// Funciones auxilires 

function estaVacio ($valor) {
    return empty(trim($valor));
}

function hayMayusculas ($valor){
    for ($i=0; $i<strlen($valor); $i++){
        if ( ctype_upper($valor[$i]) )
            return true;
    }
    return false;
}

function hayMinusculas ($valor){
    for ($i=0; $i<strlen($valor); $i++){
        if ( ctype_lower($valor[$i])){
 return true;
        }
           
    }
    return false;
}

function hayDigito ($valor){
    for ($i=0; $i<strlen($valor); $i++){
        if ( ctype_digit($valor[$i]) ){
 return true;
        }
           
    }
    return false;
}

function hayAlfanumerico ($valor){
    for ($i=0; $i<strlen($valor); $i++){
        if ( !ctype_alnum($valor[$i]) ){
return true;
        }
            
    }
    return false;
}


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
</body>
</html>