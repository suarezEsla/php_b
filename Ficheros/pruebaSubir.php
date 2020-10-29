<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form name="formulario" enctype="multipart/form-data" action="pruebaSubir.php.php" method="post" style="text-align:center">
<fieldset>
    <legend>Introduzca su nombre</legend>
    <input type="text" name="nombre" size="10"><br>
    <legend>Indique el directorio donde se guardarán los archivos</legend>
    <input type="text" name="directorio" size="30"><br>
    <legend>Indique el archivo a subir </legend><input type="file" name="archivo"><br>
    <input type="submit" value="Subir archivo">
</fieldset>
</form>
</body>



<?php
//Variable que contiene la ruta + nombre del archivo:
$ruta_nueva="C:\xampp\htdocs\php_b\Ficheros\imagenes_prueba".$_FILES['archivo']['name'];
if (file_exists($ruta_nueva)){//Si el archivo ya existe, salimos.
    echo "Este archivo ya existe. ";
    die();
}
//Si no existe: Creamos otra variable para almacenar temporalmente el archivo.
$ruta_temporal=$_FILES['archivo']['tmp_name'];


//Con la función move_uploaded_file, movemos el archivo de la ruta temporal a la ruta definida más arriba-
move_uploaded_file($ruta_temporal,$ruta_nueva);
echo "El archivo es: ";
echo "<img src=\"$ruta_nueva\">";
?>
</html>








