<?php
//Apertura del archivo  en modo solo escritura. Coloca el puntero al 
//final del fichero. Si el fichero no existe se intenta crear. 
$archivo = fopen("incidencias.txt",'a') or die ("ERROR al abrir el archivo");

//Convertimos los caracteres html con htmlspecialchars de nom 
$nom = htmlspecialchars($_POST['nombre']);

//comprobamos primero si el resumen viene vacío, de venir vacío se rellena con 
//una frase genérica.
if(empty($_POST['resumen'])){
    $_POST['resumen']="Sin datos";
}

//Comprobamos la prioridad
if(empty($_POST['prioridad'])){
    $_POST['prioridad']="Sin datos de prioridad";
}
$prioridad=$_POST['prioridad'];

//stripslashes quita las barras de un string con comillas escapadas
//nl2br Inserta saltos de línea HTML antes de todas las nuevas líneas de un string
//htmlentities es una función idéntica a htmlspecialchars() en todos los aspectos, 
//excepto que con htmlentities(), todos los caracteres que tienen equivalente HTML 
//son convertidos a esas entidades.
$mensaje = stripslashes(nl2br(htmlentities($_POST['resumen'])));

//obtengo la fecha y la hora del sistema
$d = date ( "d/m/Y H:i:s" );

//aquí guardaremos el nombre, el resumen, la fecha, hora y la prioridad.
$page = "<b>$nom</b>  <b>Fecha:</b> $d<br> <b>Mensaje:</b> $mensaje<br><b>Prioridad: </b>$prioridad\n<br><hr>-";

//Añadimos el mensaje
fwrite($archivo,"$page" ,strlen("$page"));


//mostramos el mensaje de añadido
echo "<div align='center'>Gracias $nom, se ha anotado su incidencia.<br>";
echo "<a href='index.php' title='Volver'>Volver</a></div>";


?>