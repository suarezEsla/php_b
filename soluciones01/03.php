<?php
/*Ejercicio 3
Escribe un programa que muestre por pantalla 5 palabras en inglés junto a su correspondiente
traducción al castellano. Las palabras deben estar distribuidas en dos columnas. Utiliza la etiqueta
<table> de HTML.*/
echo ("<h1>Traducción inglés-castellano</h1>");
echo '<table border="4">';

echo '<tr>';
echo '<td> CAR</td>';
echo '<td> ENGLISH->>SPANISH</td>';
echo '<td> COCHE</td>';
echo '</tr>';

echo '<tr>';
echo '<td> HOUSE</td>';
echo '<td> ENGLISH->>SPANISH</td>';
echo '<td> CASA</td>';
echo '</tr>';

echo '<tr>';
echo '<td> TREE</td>';
echo '<td> ENGLISH->>SPANISH</td>';
echo '<td> ÁRBOL</td>';
echo '</tr>';

echo '<tr>';
echo '<td> SEA</td>';
echo '<td> ENGLISH->>SPANISH</td>';
echo '<td> MAR</td>';
echo '</tr>';

echo '<tr>';
echo '<td> SQUIRRELL</td>';
echo '<td> ENGLISH->>SPANISH</td>';
echo '<td> ARDILLA</td>';
echo '</tr>';

echo '</table>';

?>