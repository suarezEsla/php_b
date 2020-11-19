<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form name="formulario" method="post" action="contador.php">

    Introduzca su nombre de usuario<input type="text" name="usuario" autofocus>
    </form>

    <?php
 /*    1. Realizar programa php (contador.php) que muestre cuantas veces se ha accedido a la página en total y cuantas  veces desde
  un mismo navegador trabajando sobre un fichero llamado accesos.txt y con un valor de cookie válido por tres meses. */
  
    session_start();//Iniciamos sesión
    // Iniciamos variable de sesión
    if(isset($_REQUEST['usuario'])){//Si se ha introducido un nombre de usuario
        $usuario=$_REQUEST['usuario'];//Lo guardamos en la variable $usuario
    $_SESSION['usuario'] = $usuario;

    }else{//Si no, salta mensaje de error.
        echo "Error. Debe introducir un nombre de usuario.";
        exit();
    }
    
    
    // Accedemos a la variable de sesión
    /* echo $_SESSION['usuario']; */


   //Contador de visitas
   if (isset($_COOKIE['visitas'])){//Si existe el cookie, incrementamos contador (del cookie) en 1.
       setcookie('visitas',$_COOKIE['visitas']+1,time()+60*60*24*30);
       $mensaje="<h4>La página ha sido visitada ".$_COOKIE['visitas']." veces. Bienvenido $usuario. </h4><br>";

   }else{//Si no existe, creamos el cookie por primera vez, empezando en 1. 
       setcookie('visitas',1,time()+60*60*24*30);
       $mensaje="<h4>Primera visita. Cookie creada correctamente. Bienvenido $usuario.</h4><br>";
       
   }
          echo $mensaje."<br>";

    //Leemos el contenido del fichero 'accesos.txt'.
    $fichero=@fopen('accesos.txt','r');//Lo almacenamos en la variable $fichero y lo abrimos con 'r' para leer.
    while (!feof($fichero)){//Mientras no se llegue al final del archivo (feof=final of file)...
        $linea=fgets($fichero) ;//Vamos almacenandp las lineas en $linea con fgets,hasta llegar al final del mismo.
        echo $linea;//Leemos las líneas
    }
    fclose($fichero);//Cerramos el fichero
    


    ?>
    


    
    
</body>
</html>