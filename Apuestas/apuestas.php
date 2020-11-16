<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--Formulario para pedir datos al usuario-->
       <form name="formulario">
       Introduzcca una cantidad, y pulse enter para realizar la apuesta.<br>
<input type="number" name="cantidadUsuario" id="cantidadUsuario"><br><!--Catidad que apuesta-->
<input type="button" name="salir" value="salir"><br><!--Botón para terminar-->
</form> 





<?php
include_once 'funcionesapuestas.php';//Incluimos el archivo de las funciones
session_start();//Iniciamos sesión
define('MAXFALLOS', 6);//Definimos el máximo de fallos

$ganadas = 0;
// Si existe el COOKIE obtengo las partidas ganadas
if ( isset($_COOKIE['ganadas'])){
    $ganadas = $_COOKIE['ganadas'];
}




if (! isset($_SESSION['cantidadUsuariio'])) {//Si no hay ninguna cantidad todavía (en la sesión)
    echo " NUEVA PARTIDA <br>";
    $_SESSION['cantidadUsuario'] = apostar();//se lee la cantidad que meta el usuario y se llama a la función apostar
    $_SESSION['cantidadMaquina'] = "";
    $_SESSION['fallos'] = 0;
    
    
}


if (!apostar()===true){//Si el usuario pierde una partida
     $_SESSION['fallos'] ++;//Se incrementa el número de fallos
     if ($_SESSION['fallos']>=MAXFALLOS){//Si alcanza el máximo número de fallos permitido
         echo " Superado el máximo número de fallos. Has perdido <br> ";
            session_destroy();//Se destruye la sesión
            echo "<a href=\"" . $_SERVER['PHP_SELF'] . "\"> Otra partida </a> </body></html>";//Se vuelve a iniciar sesión
            exit();

     }else{//Si el usuario gana una partida
        $ganadas++;
            if ( $ganadas > 0 ){//Si el número de $ganadas es mayor que 0, se le dice al usuario cuántas partidas lleva ganadas
        echo " Has ganado $ganadas partidas.<br>";
    }
         // Actualizo el cookie
    setcookie("ganadas",$ganadas, time()+ 2 * 7 * 24 * 3600);
    session_destroy();
    echo "<a href=\"" . $_SERVER['PHP_SELF'] . "\"> Otra partida </a> </body></html>";
    exit();
     }
}









?>

</body>








</html>