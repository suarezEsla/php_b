
<!-- /*Ejercicio 8
Realiza un conversor de euros a pesetas. La cantidad en euros que se quiere convertir deberá estar
almacenada en una variable.*/ -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_08.css">
    <title>Conversor euros a pesetas</title>
</head>
<body>
<div id="encabezado">
<h3>Conversor euros a pesetas</h3> 
<h4>Ejercicio 8</h4>  
<h5>@Esla Suárez</h5>
</div>

<div id="contenedor">
<table class="tabla">
    <?php
$euros=15115151;
$pesetas=$euros*166.386;
echo "<tr><td>$euros. euros son ".$pesetas." pesetas .</td></tr>";
?>
</table>
</div>
</body>
</html>



