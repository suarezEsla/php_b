
<!-- 2.- Crear un array que almacene 5 cadenas con el nombre de periódicos y 
sus enlaces para acceder. El array será asociativo con el nombre del periódico como clave y su URL como valor. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Medios</title>
</head>
<body>
   <?php
$medios=["Marca"=>"https://www.marca.com","El País"=>"https://elpais.com/","El Mundo"=>"https://www.elmundo.es/","El Mundo Today"=>"https://www.elmundotoday.com/","As"=>"https://as.com/"];
   
   foreach($medios as $clave=>$valor){//Recorrer medios como 'clave' y 'valor'
echo "Lista de medios: <br>"
    echo "<li> <a href=\"$valor\">$clave</a></li>";
}
echo "</ul>";


   

   ?>


  
   
</body>
</html>