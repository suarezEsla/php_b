<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea Guardar Imagenes</title>
    
</head>
<body>
<a href="https://github.com/suarezEsla"><strong>@3s1a</strong></a>
<div class="form">
<form enctype="multipart/form-data" action="guardar_2.php" method="post">
        <table border="1" >
          
        <label for="file[]">Seleccione las imágenes que desea subir</label>
            <tr>
                <td><input type="file" name="file[]" multiple size="20"></td>
            <tr>
                <td colspan="2" style="text-align:center"><input type="submit" value="Enviar"></td>
            </tr>
        </table>
    </form>
</div>

</body>

<?php



if (isset($_FILES["file"]))//Si el archivo existe.
{
   $error = null;
     for($x=0; $x<count($_FILES["file"]["name"]); $x++)//Recorremos el array $_Files para ver los archivos que hay dentro
    {
      $file = $_FILES["file"];//Le damos un nombre (variable)
      $nombre = $file["name"][$x];//Obtenemos el nombre del archivo
      $tipo = $file["type"][$x];//Obtenemos el tipo
      $ruta_provisional = $file["tmp_name"][$x];//Obtenemos la ruta provisional
      $size = $file["size"][$x];//Obtenemos el tamañp
      $tamano = getimagesize($ruta_provisional);



      $carpeta = "C:\Users\suare\OneDrive\Escritorio\imgusers";//Indicamos la carpeta final


      /* if (mime_content_type($file) != 'image/jpeg' || mime_content_type($file) != 'image/png') */

var_dump($tipo);

       if ( $tipo != 'image/jpeg' && $tipo != 'image/png' ) {//Si el tamaño no es jpg o png
          $error .= "<p style='color: red'>Error, el archivo no es una imagen del tipo permitido.</p>";
      }
      else if(!($size < 300000) && !($size>200000)){
          $error .= "<p style='color: red'>Error, tamaño del archivo no permitido</p>";
      }else{
          $src = $carpeta."\\".$nombre;

          //Movemos imagenes al servidor, de la ruta provisional a nuestro directorio
         if(move_uploaded_file($ruta_provisional, $src)){
            echo "<p style='color: blue'>La imagen ha sido subida con éxito</p>";
         } else{ echo "ERROR, no se ha podido mover el archivo.";
         }
          
      }
    
    }
    echo $error;
}
   
?>
</html>
