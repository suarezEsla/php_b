
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_04.css">
    <title>Horario</title>
</head>
<body>

<!--Encabezado-->
<div id="encabezado">
<h1>Ejercicio 4</h1>
<h3>Esla Suárez</h3>
<h2>DAW 2º</h2>
</div>


<!--Tabla-->
    <div id="contenedor">
<table id="tabla">     
<tr><th></th><th>Lunes</th><th>Martes</th><th>Miércoles</th><th>Jueves</th><th>Viernes</th></tr>  
<?php
echo "<tr><td>8.30<br>9.20</td><td rowspan='3' style=background-color:#C9A0CA;>Cliente</td><td style=background-color:#96DB98;>Servidor</td><td rowspan='3' style=background-color:#C9A0CA;>Cliente</td><td  rowspan='3' style=background-color:#C9A0CA;>Cliente</td><td rowspan='3' style=background-color:#96DB98;>Servidor</td></tr>";
?>
<tr></tr>
<tr><td>9.25<br>10.20</td><td  rowspan="2" class="emp">Empresa</td></tr>
<tr><td>10.20<br>11.10</td><td class="ing">Inglés</td><td class="serv">Servidor</td><td class="cli">Cliente</td><td class="inter">Interfaces</td></tr>
<tr><td class="rec" colspan="6"><center>R E C R E O</center></td></tr>
<tr><td>11.40<br>12.30</td><td rowspan="2" class="serv">Servidor</td><td rowspan="2" class="inter">Interfaces</td><td class="serv">Servidor</td><td class="cli">Cliente</td><td  class="inter">Interfaces</td></tr>
<tr><td>12.35<br>13.25</td><td rowspan="2" class="inter">Interfaces</td><td rowspan="2" class="serv">Servidor</td><td rowspan="2" class="cli">Despliegue</td></tr>
<tr><td>13.30<br>14.20</td><td class="emp">Empresa</td><td class="ing">Inglés</td></tr>
    </div>
</table>


</body>
</html>
