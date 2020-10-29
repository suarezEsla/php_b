<html>
<head>
<title>Procesa una subida de archivos </title>
<meta charset="UTF-8">
</head>
<?php
// se incluyen esta tabla de  códigos de error que produce la subida de archivos en PHPP
// Posibles errores de subida segun el manual de PHP
$codigosErrorSubida= [ 
    0 => 'Subida correcta',
    1 => 'El tamaño del archivo excede el admitido por el servidor',  // directiva upload_max_filesize en php.ini
    2 => 'El tamaño del archivo excede el admitido por el cliente',  // directiva MAX_FILE_SIZE en el formulario HTML
    3 => 'El archivo no se pudo subir completamente',
    4 => 'No se seleccionó ningún archivo para ser subido',
    6 => 'No existe un directorio temporal donde subir el archivo',
    7 => 'No se pudo guardar el archivo en disco',  // permisos
    8 => 'Una extensión PHP evito la subida del archivo'  // extensión PHP
]; 
$mensaje = '';

// si no se reciben el directorio de alojamiento y el archivo, se descarta el proceso
if ((! isset($_FILES['archivo1']['name'])) or (! isset($_REQUEST['directorio']))) {//Si no existe /nombre de archivo y archivo y directorio
    $mensaje .= 'ERROR: No se indicó el archivo y/o no se indicó el directorio';
} else 
    { // se reciben el directorio de alojamiento y el archivo
    $directorioSubida = $_REQUEST['directorio']; // debe permitir la escritua para Apache
    // Información sobre el archivo subido
    $nombreFichero   =   $_FILES['archivo1']['name'];
    $tipoFichero     =   $_FILES['archivo1']['type'];
    $tamanioFichero  =   $_FILES['archivo1']['size'];
    $temporalFichero =   $_FILES['archivo1']['tmp_name'];
    $errorFichero    =   $_FILES['archivo1']['error'];

    $mensaje .= 'Intentando subir el archivo: ' . ' <br />';
    $mensaje .= "- Nombre: $nombreFichero" . ' <br />';
    $mensaje .= '- Tamaño: ' . number_format(($tamanioFichero / 1000), 1, ',', '.'). ' KB <br />';
    $mensaje .= "- Tipo: $tipoFichero" . ' <br />' ;
    $mensaje .= "- Nombre archivo temporal: $temporalFichero" . ' <br />';
    $mensaje .= "- Código de estado: $errorFichero" . ' <br />';
    
    $mensaje .= '<br />RESULTADO<br />';

    // Obtengo el código de error de la operación, 0 si todo ha ido bien
    if ($errorFichero > 0) {
        $mensaje .= "Se ha producido el error nº $errorFichero: <em>" 
                     . $codigosErrorSubida[$errorFichero] . '</em> <br />';
    } else { // subida correcta del temporal
        // si es un directorio y tengo permisos     
         if ( is_dir($directorioSubida) && is_writable ($directorioSubida)) { 
            //Intento mover el archivo temporal al directorio indicado
            if (move_uploaded_file($temporalFichero,  $directorioSubida .'/'. $nombreFichero) == true) {
                $mensaje .= 'Archivo guardado en: ' . $directorioSubida .'/'. $nombreFichero . ' <br />';
            } else {
                $mensaje .= 'ERROR: Archivo no guardado correctamente <br />';
            }
        } else {
            $mensaje .= 'ERROR: No es un directorio correcto o no se tiene permiso de escritura <br />';
        }
    }
}
?>


<body>
<?php echo " Bienvenido ".$_REQUEST['nombre']."<br>"?>
<?php echo $mensaje; ?>
<br />
	<a href="subirfichero.html">Volver a la página de subida</a>
</body>
</html>