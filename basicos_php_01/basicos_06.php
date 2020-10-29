
<!--6.- Generar la  tabla de multiplicar de un número elegido al azar entre 1 y 10 con la siguiente apariencia-->



<?php
$num=random_int(1,10);

echo "<center><h1 style='background-color:blue; font-family:verdana;'>TABLA DE MULTIPLICAR</h1></center>";
?>


<?php
echo "<center><table width='120'; border='2' bordercolor=violet>";
echo "<tr>";
echo "<td>Tabla del: </td>";
echo "<td>   ".$num."   </td>";
echo "<td>&nbsp&nbsp</td>";
echo "</tr>";
echo "</table></center>";


for($i=0;$i<=10;$i++){
    $tab=$i*$num;
echo "<center><table width='120'; border='2' bordercolor=violet>";
echo "<tr>";
echo "<td>   ".$num."   X ".$i." =   </td>";
echo "<td>   ".$tab."</td>";
echo "</tr>";
echo "</table></center>";
} 
?>
</body>
</html>





