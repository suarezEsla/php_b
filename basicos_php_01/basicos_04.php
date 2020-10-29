<?php
/*Generar números al azar entre 1 y 10 hasta que se generen 3 veces el valor 6 
de forma consecutiva en ese caso se mostrará cuantos número se han generado.

Han salido tres 6 seguidos tras genera 1343 números en 1.002 milisegundos

Para obtener los segundos utilizamos la función microtime(true)  para obtener la fecha actual en segundos.
*/
$contseis=0;
$cont=0;

do{
    $num=random_int(1,10);
    $cont=$cont++;
    echo $num;
    if($num==6){
        $contseis=$contseis++;
    if($contseis=3){
        echo ("<center>Milisegundos:<br>".microtime()."</center>"); 
    }      
    }
}while($cont<10);
if($cont=10){
    echo ("Adios");
}
?>