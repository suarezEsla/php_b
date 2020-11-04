<!-- 1. Crea un archivo php llamado nif.php que solicite un número de de DNI y me muestre su letra NIF correspondiente,
 se tiene que comprobar tanto en la parte cliente como servidor que  elvalor introducido esta formado solo por dígitos. 
 La primera vez se mostrará el formulario y tras rellenar campo DNI se invocará al propio script php por  el método POST para que 
 muestre la letra del NIF correspondiente.

Para saber que letra le corresponde a un número, se obtiene el resto de dividir el número entre 23 , 
y la letra almacenada en la posición indicada por el resto será la buscada.
 -->



 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>05.1</title>
 </head>
 <body>
     <form class="formulario" name="formulario" action="01.php" method="post">
     Introduzca los dígitos de su DNI <input type="text" id="dni" name="dni">
     <input type="submit" id="enviar" name="enviar">
     </form>
     <?php

     if ((isset($_POST['enviar']))&&is_numeric($_POST['dni'])){
        $letras='TRWAGMYFPDXBNJZSQVHLCKE';
        $dni=$_POST['dni'];
        $indice=intval($_POST['dni'])%23;
        $letra=$letras[$indice];
        echo "La letra del $dni es $letra";
     }else{
         echo "$dni no es un número."
     }
     

?>
 </body>
 </html>
