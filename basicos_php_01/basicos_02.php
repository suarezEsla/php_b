<?php
/*2.-  Obtener un número al azar entre 1 y 9 y generar una la escalera numérica 
del tamaño indicado alternando colores entre rojo y azul.*/
$uno=1;
$num1=random_int(1,9);


echo ("Número generado: </center>".$num1);

for ($i=0; $i<=$num1; $i++){ 
    for ($b=1; $b<=$i; $b++){
        if($i%2==0){
                echo  "<font color='red'>". $i."</font>"; 
            }else if ($i%2!=0){
                echo  "<font color='blue'>". $i."</font>"; 
            }
        }
        echo ("<br>");  
    }
?>