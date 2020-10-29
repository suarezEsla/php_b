
<?php
/*7. Elegir tres valores entre 100 y 500 y pintar tres barras de color rojo, verde y azul del tamaño indicado.
Pista: Utilizar  3 tablas con una fila del tamaño generado.*/


/*Tabla 1*/
$num=random_int(100,500);
echo ("<center>Número generado: ".$num."</center>");
if($num>=100&&$num<=200){
    echo "<center><table style=background-color:blue; width='250';  border='2'>";
    echo "<tr>";
    echo "<td width='80';>Tamaño1</td>";
    echo "</tr>";
    echo "</table></center>";
}elseif($num>=201&&$num<=300){
    echo "<center><table style=background-color:blue; width='350';  border='2'>";
    echo "<tr>";
    echo "<td>Tamaño1</td>";
    echo "</tr>";
    echo "</table></center>"; 
}elseif($num>=301&&$num<=500){
    echo "<center><table style=background-color:blue; width='500'; border='2'>";
    echo "<tr>";
    echo "<td>Tamaño1</td>";
    echo "</tr>";
    echo "</table></center>"; 
}
/*Tabla 2*/
$num1=random_int(100,500);
echo ("<center>Número generado: ".$num1."</center>");
if($num1>=100&&$num1<=200){
    echo "<center><table style=background-color:red; width='250'; border='2'>";
    echo "<tr>";
    echo "<td width='80';>Tamaño2</td>";
    echo "</tr>";
    echo "</table></center>";
}elseif($num1>=201&&$num1<=300){
    echo "<center><table style=background-color:red; width='350'; border='2'>";
    echo "<tr>";
    echo "<td>Tamaño2</td>";
    echo "</tr>";
    echo "</table></center>"; 
}elseif($num1>=301&&$num1<=500){
    echo "<center><table style=background-color:red; width='500'; border='2'>";
    echo "<tr>";
    echo "<td>Tamaño2</td>";
    echo "</tr>";
    echo "</table></center>"; 
}

/*Tabla 3*/
$num2=random_int(100,500);
echo ("<center>Número generado: ".$num2."</center>");
if($num2>=100&&$num2<=200){
    echo "<center><table style=background-color:green; width='250'; border='2'>";
    echo "<tr>";
    echo "<td width='80';>Tamaño3</td>";
    echo "</tr>";
    echo "</table></center>";
}elseif($num2>=201&&$num2<=300){
    echo "<center><table style=background-color:green; width='350'; border='2'>";
    echo "<tr>";
    echo "<td>Tamaño3</td>";
    echo "</tr>";
    echo "</table></center>"; 
}elseif($num1>=301&&$num1<=500){
    echo "<center><table style=background-color:green; width='500'; border='2'>";
    echo "<tr>";
    echo "<td>Tamaño3</td>";
    echo "</tr>";
    echo "</table></center>"; 
}

?>