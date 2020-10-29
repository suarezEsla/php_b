<?php

/*
3-   Obtener un número al azar entre 1 y 9 y generar una pirámide con ese número de peldaños.
Utilizar la marca <code></code> 
para que la visualización no se deforme por el tamaño de los espacio o una estilo con tipo de letra monospace.
*/

 $num1=random_int(1,9);
 echo ("<center>Número generado: ".$num1."</center>");

    echo "<center>";/*Centrar la pirámide*/
    for($i=0, $j=1; $i<$num1; $i++, $j++) {
        echo str_repeat(" * ", $i + $j).'<br />';
    }
    echo "</center>";   

?>