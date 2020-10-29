<!-- 1.- Rellenar un array con 20 números aleatorios entre 1 y 10 y 
mostrar el contenido del array  mediante una tabla de una fila en HMTL. Mostrar a 
continuación el valor máximo, el mínimo y el  valor que mas veces se repite. (Nota definir funciones para cada caso) -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones Array</title>
</head>
<body>
<h1>Apuntes arrays</h1>
<h2>Sacar mayor, menor, ordenar, quitar primero, quitar último, llenar array con valores...</h2>

<?php



//Sacar numero mayor array
$array=array(25,200,154,1564,20,3);
print_r($array);
echo sort($array)."<br>";
echo "<h4>Mayor valor array: max()</h4><br>";
echo max($array)."<br>";
echo "<br>"; 

//Sacar menor
$array=array(25,200,154,1564,20,3);
echo "<h4>Menor valor array: min()</h4><br>";
echo min($array)."<br>";
echo "<br>";

//Ordenar array de menor a mayor
$array1 = array(25,200,154,1564,20,3);
echo "<h4>Ordenar array de menor a mayor: sort()</h4><br>";
sort($array1);
foreach ($array1 as $clave => $valor) {
    echo "Array ordenado de menor a mayor [" . $clave . "] = " . $valor . "\n<br>";
}


echo "<br>";
//Quitar primer elemento array
echo "<h4>Quitar primero: </h4><br>";
$primero=array_shift($array1);
print_r($array1);
echo "<br>";


//Vuelvo a declarar otro array para quitar el último
$array2=array(25,200,154,1564,20,3);
echo "<h4>Ordenar array de menor a mayor: sort()</h4><br>";
sort($array2);
foreach ($array2 as $clave1 => $valor1){
    echo "Array ordenado de menor a mayor [" . $clave1 . "] = " . $valor1 . "\n<br>";
}


//Quitar último
echo "<br>";
echo "<h4>Quitar último: </h4><br>";
$ultimo=array_pop($array2);
print_r($array2);


//Sacar diferencia entre dos arrays
echo "<br>";
echo "<h4>Sacar la diferencia entre dos arrays: array_diff </h4><br>";
$uno=array("a"=>"verde","amarillo","perro","cocodrilo",123);
$dos=array("b"=>"verde","amarillo","gato","cocodrilo",123);
$resultado=array_diff($uno,$dos);
print_r($resultado);

//LLenar array con valores: array_fill ( int $start_index , int $num , mixed $value ) : array 
/* $start_index
El primer índice del array retornado. (Si es 5, el primer indice del array será 5).
Si $start_index es negativo, el primer índice del array retornado será $start_index y los siguientes indices comenzarán desde cero (ver ejemplo).
$num
Número de elementos a insertar. Debe ser mayor o igual que cero.
$value
Valor a usar para el llenado. */
echo "<h4>Llenar un array con valores: array_fill</h4>";
$a = array_fill(5, 6, 'banana');//Empieza por índice 5
$b = array_fill(-2, 4, 'pear');//Empieza por índice -2 y el siguiente índice será 0
echo "<br>";
print_r($a);
print_r($b);


?>



</body>
</html>



