<?php

/*5.- Realizar un segunda versión del primer ejercicio donde la 
página de resultado tiene que mostrar una tabla con el siguiente  formato utilizando estilo.*/

$num1= random_int(1,10);
$num2= random_int(1,10);

echo ("<center>Números generados: ".$num1.(" y ").$num2.("</center><br>"));

echo ("<center><table  border='4'>");

echo ("<tr>");/*Encabezado de la tabla*/
echo ("<td>Operación</td>");
echo ("<td>Solución</td>");
echo ("</tr>");

/*Operaciones*/
echo ("<tr>");
echo ("<td>$num1+$num2=</td>");
echo ("<td>".($num1+$num2)."</td>");
echo ("<tr>");

echo ("<tr>");
echo ("<td>$num1-$num2=</td>");
echo ("<td>".($num1-$num2)."</td>");
echo ("<tr>");

echo ("<tr>");
echo ("<td>$num1*$num2=</td>");
echo ("<td>".($num1*$num2)."</td>");
echo ("<tr>");

echo ("<tr>");
echo ("<td>$num1/$num2=</td>");
echo ("<td>".($num1/$num2)."</td>");
echo ("<tr>");


echo ("</table></center>");

?>