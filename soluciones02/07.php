
<!-- /* Realizar un programa que genere una tabla html de 10x10 con casillas de 30x30 px donde cada casilla 
tenga un color aleatorio obtenido mediante una función que genera un color diferente en cada casilla.

1º Versión  elegir entre 5 posibles valores: rojo,verde, azul, blanco y negro.
2º Versión cualquier color aleatorios
3º  Se elegir un color aleatorio y mostrar un degradado.
 */ -->
<link rel="stylesheet" href="07styles.css">

<!--Tabla 1 (versión 1)-->
<h3>Ejercicio 7</h3>
<h2>Esla Suárez</h2>
<h1>Versión 1: Colores negro, rojo, azúl o verde</h1>
<table border="1">

<tr>
<th ></th> <th ></th> <th></th> <th></th> <th></th> <th></th> <th></th> <th></th> <th></th> <th></th>
</tr>

<tr>
<th></th> <th></th> <th></th> <th></th> <th></th> <th></th> <th></th> <th></th> <th></th> <th></th>
</tr>

<tr>
<th></th> <th></th> <th></th> <th></th> <th></th> <th></th> <th></th> <th></th> <th></th> <th></th>
</tr>

<tr>
<th></th> <th></th> <th></th> <th></th> <th></th> <th></th> <th></th> <th></th> <th></th> <th></th>
</tr>

<tr>
<th></th> <th></th> <th></th> <th></th> <th></th> <th></th> <th></th> <th></th> <th></th> <th></th>
</tr>

<tr>
<th></th> <th></th> <th></th> <th></th> <th></th> <th></th> <th></th> <th></th> <th></th> <th></th>
</tr>

<tr>
<th></th> <th></th> <th></th> <th></th> <th></th> <th></th> <th></th> <th></th> <th></th> <th></th>
</tr>

<tr>
<th></th> <th></th> <th></th> <th></th> <th></th> <th></th> <th></th> <th></th> <th></th> <th></th>
</tr>

<tr>
<th></th> <th></th> <th></th> <th></th> <th></th> <th></th> <th></th> <th></th> <th></th> <th></th>
</tr>

<tr>
<th></th> <th></th> <th></th> <th></th> <th></th> <th></th> <th></th> <th></th> <th></th> <th></th>
</tr>

</table>







<!--Tabla2 (versión 2)-->
<h3>Ejercicio 7</h3>
<h2>Esla Suárez</h2>
<h1>Versión 2: Colores aleatorios</h1>
 <table border="1" class="tabla">
 <tr>
 <th style='background-color:<?php echo randomColor(); ?>;' ></th> <th style='background-color:<?php echo randomColor(); ?>;'></th> <th style='background-color:<?php echo randomColor(); ?>;'> </th> <th style='background-color:<?php echo randomColor(); ?>;'></th> <th style='background-color:<?php echo randomColor(); ?>;'></th> <th style='background-color:<?php echo randomColor(); ?>;'></th> <th style='background-color:<?php echo randomColor(); ?>;'></th> <th style='background-color:<?php echo randomColor(); ?>;'></th> <th style='background-color:<?php echo randomColor(); ?>;'></th> <th style='background-color:<?php echo randomColor(); ?>;'></th>
 </tr>

 <tr>
 <th style='background-color:<?php echo randomColor(); ?>;' ></th> <th style='background-color:<?php echo randomColor(); ?>;'></th> <th style='background-color:<?php echo randomColor(); ?>;'> </th> <th style='background-color:<?php echo randomColor(); ?>;'></th> <th style='background-color:<?php echo randomColor(); ?>;'></th> <th style='background-color:<?php echo randomColor(); ?>;'></th> <th style='background-color:<?php echo randomColor(); ?>;'></th> <th style='background-color:<?php echo randomColor(); ?>;'></th> <th style='background-color:<?php echo randomColor(); ?>;'></th> <th style='background-color:<?php echo randomColor(); ?>;'></th>
 </tr>

 <tr>
 <th style='background-color:<?php echo randomColor(); ?>;' ></th> <th style='background-color:<?php echo randomColor(); ?>;'></th> <th style='background-color:<?php echo randomColor(); ?>;'> </th> <th style='background-color:<?php echo randomColor(); ?>;'></th> <th style='background-color:<?php echo randomColor(); ?>;'></th> <th style='background-color:<?php echo randomColor(); ?>;'></th> <th style='background-color:<?php echo randomColor(); ?>;'></th> <th style='background-color:<?php echo randomColor(); ?>;'></th> <th style='background-color:<?php echo randomColor(); ?>;'></th> <th style='background-color:<?php echo randomColor(); ?>;'></th>
 </tr>

 <tr>
 <th style='background-color:<?php echo randomColor(); ?>;' ></th> <th style='background-color:<?php echo randomColor(); ?>;'></th> <th style='background-color:<?php echo randomColor(); ?>;'> </th> <th style='background-color:<?php echo randomColor(); ?>;'></th> <th style='background-color:<?php echo randomColor(); ?>;'></th> <th style='background-color:<?php echo randomColor(); ?>;'></th> <th style='background-color:<?php echo randomColor(); ?>;'></th> <th style='background-color:<?php echo randomColor(); ?>;'></th> <th style='background-color:<?php echo randomColor(); ?>;'></th> <th style='background-color:<?php echo randomColor(); ?>;'></th>
 </tr>

 <tr>
 <th style='background-color:<?php echo randomColor(); ?>;' ></th> <th style='background-color:<?php echo randomColor(); ?>;'></th> <th style='background-color:<?php echo randomColor(); ?>;'> </th> <th style='background-color:<?php echo randomColor(); ?>;'></th> <th style='background-color:<?php echo randomColor(); ?>;'></th> <th style='background-color:<?php echo randomColor(); ?>;'></th> <th style='background-color:<?php echo randomColor(); ?>;'></th> <th style='background-color:<?php echo randomColor(); ?>;'></th> <th style='background-color:<?php echo randomColor(); ?>;'></th> <th style='background-color:<?php echo randomColor(); ?>;'></th>
 </tr>

 <tr>
 <th style='background-color:<?php echo randomColor(); ?>;' ></th> <th style='background-color:<?php echo randomColor(); ?>;'></th> <th style='background-color:<?php echo randomColor(); ?>;'> </th> <th style='background-color:<?php echo randomColor(); ?>;'></th> <th style='background-color:<?php echo randomColor(); ?>;'></th> <th style='background-color:<?php echo randomColor(); ?>;'></th> <th style='background-color:<?php echo randomColor(); ?>;'></th> <th style='background-color:<?php echo randomColor(); ?>;'></th> <th style='background-color:<?php echo randomColor(); ?>;'></th> <th style='background-color:<?php echo randomColor(); ?>;'></th>
 </tr>

 <tr>
 <th style='background-color:<?php echo randomColor(); ?>;' ></th> <th style='background-color:<?php echo randomColor(); ?>;'></th> <th style='background-color:<?php echo randomColor(); ?>;'> </th> <th style='background-color:<?php echo randomColor(); ?>;'></th> <th style='background-color:<?php echo randomColor(); ?>;'></th> <th style='background-color:<?php echo randomColor(); ?>;'></th> <th style='background-color:<?php echo randomColor(); ?>;'></th> <th style='background-color:<?php echo randomColor(); ?>;'></th> <th style='background-color:<?php echo randomColor(); ?>;'></th> <th style='background-color:<?php echo randomColor(); ?>;'></th>
 </tr>

 <tr>
 <th style='background-color:<?php echo randomColor(); ?>;' ></th> <th style='background-color:<?php echo randomColor(); ?>;'></th> <th style='background-color:<?php echo randomColor(); ?>;'> </th> <th style='background-color:<?php echo randomColor(); ?>;'></th> <th style='background-color:<?php echo randomColor(); ?>;'></th> <th style='background-color:<?php echo randomColor(); ?>;'></th> <th style='background-color:<?php echo randomColor(); ?>;'></th> <th style='background-color:<?php echo randomColor(); ?>;'></th> <th style='background-color:<?php echo randomColor(); ?>;'></th> <th style='background-color:<?php echo randomColor(); ?>;'></th>
 </tr>

 <tr>
 <th style='background-color:<?php echo randomColor(); ?>;' ></th> <th style='background-color:<?php echo randomColor(); ?>;'></th> <th style='background-color:<?php echo randomColor(); ?>;'> </th> <th style='background-color:<?php echo randomColor(); ?>;'></th> <th style='background-color:<?php echo randomColor(); ?>;'></th> <th style='background-color:<?php echo randomColor(); ?>;'></th> <th style='background-color:<?php echo randomColor(); ?>;'></th> <th style='background-color:<?php echo randomColor(); ?>;'></th> <th style='background-color:<?php echo randomColor(); ?>;'></th> <th style='background-color:<?php echo randomColor(); ?>;'></th>
 </tr>

 <tr>
 <th style='background-color:<?php echo randomColor(); ?>;' ></th> <th style='background-color:<?php echo randomColor(); ?>;'></th> <th style='background-color:<?php echo randomColor(); ?>;'> </th> <th style='background-color:<?php echo randomColor(); ?>;'></th> <th style='background-color:<?php echo randomColor(); ?>;'></th> <th style='background-color:<?php echo randomColor(); ?>;'></th> <th style='background-color:<?php echo randomColor(); ?>;'></th> <th style='background-color:<?php echo randomColor(); ?>;'></th> <th style='background-color:<?php echo randomColor(); ?>;'></th> <th style='background-color:<?php echo randomColor(); ?>;'></th>
 </tr>

 </table>



 <h3>Ejercicio 7</h3>
<h2>Esla Suárez</h2>
<h1>Versión 3: Degradado</h1>
<table border="1">

<tr>
<th ></th> <th ></th> <th></th> <th></th> <th></th> <th></th> <th></th> <th></th> <th></th> <th></th>
</tr>

<tr>
<th></th> <th></th> <th></th> <th></th> <th></th> <th></th> <th></th> <th></th> <th></th> <th></th>
</tr>

<tr>
<th></th> <th></th> <th></th> <th></th> <th></th> <th></th> <th></th> <th></th> <th></th> <th></th>
</tr>

<tr>
<th></th> <th></th> <th></th> <th></th> <th></th> <th></th> <th></th> <th></th> <th></th> <th></th>
</tr>

<tr>
<th></th> <th></th> <th></th> <th></th> <th></th> <th></th> <th></th> <th></th> <th></th> <th></th>
</tr>

<tr>
<th></th> <th></th> <th></th> <th></th> <th></th> <th></th> <th></th> <th></th> <th></th> <th></th>
</tr>

<tr>
<th></th> <th></th> <th></th> <th></th> <th></th> <th></th> <th></th> <th></th> <th></th> <th></th>
</tr>

<tr>
<th></th> <th></th> <th></th> <th></th> <th></th> <th></th> <th></th> <th></th> <th></th> <th></th>
</tr>

<tr>
<th></th> <th></th> <th></th> <th></th> <th></th> <th></th> <th></th> <th></th> <th></th> <th></th>
</tr>

<tr>
<th></th> <th></th> <th></th> <th></th> <th></th> <th></th> <th></th> <th></th> <th></th> <th></th>
</tr>

</table>
 

<?php 
/*Versión 2*/

function randomColor() {
    $str = '#';/*Imprimiriamos un str con #*/
    for($i = 0 ; $i < 6 ; $i++) {/*Recorremos del 1 al 6 para sacar entre 6 (por los 6 dígitos posibles*/
        $randNum = rand(0 , 15);/*Y aleatorioamente del 0 al 15*/
        switch ($randNum) {/*A partir del numero 10, son letras (Hexadecimal)*/
            case 10: $randNum = 'A'; break;
            case 11: $randNum = 'B'; break;
            case 12: $randNum = 'C'; break;
            case 13: $randNum = 'D'; break;
            case 14: $randNum = 'E'; break;
            case 15: $randNum = 'F'; break;
        }
        $str .= $randNum;/*Se imprime '#'+el número aleatorio y nos da un código de color.*/
    }
    return $str;
}
/*LLamar función
echo randomColor();*/

/*Versión 1*/



/* 
 function colorCuatro(){
     $str='#';
     $array=array("FF0000","FFFFFF","000000","008000","0000ff");

     $randNum = rand(0 , 4);
    for ($i=0; $i<=$array; $i++){
      $randNum[i];
       echo $str.=$randNum;
    }
     return $str;
 } */
 
?>