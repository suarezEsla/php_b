
<!-- 1.- Rellenar un array con 20 números aleatorios entre 1 y 10 y mostrar el contenido del array mediante una tabla de una fila en HMTL. 
Mostrar a continuación el valor máximo, el mínimo y el  valor que mas veces se repite. (Nota definir funciones para cada caso). -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>



<body>
    <?php
    //LLenar array con 20 numeros
$array=[];
for ($i=0;$i<20;$i++){
    $aleatorio=rand(1,10);
    array_push($array,$aleatorio);
}


//Función para sacar máximo
function maximo($array){
echo max($array);
}



//Función para sacar mínimo
function minimo($array){
    echo min($array);
}



//Función para sacar repetido
function repetido($array){
    $maxrepes = 0;
    $valor =0;
    for ($i = 0; $i < count($array); $i++) {
        $veces = 0;
        for ($j = 0; $j < count($array); $j++) {
            if ($array[$i] == $array[$j]) {
                $veces++;
            }    
        }
        if ($veces > $maxrepes) {
            $valor = $array[$i];
        }
    }
    return $valor;
}
echo "<br>";


//Muestro la tabla
echo "<table style='border: 1px solid black; border-collapse:collapse';><tr>";
for ($i = 0; $i<count($array);$i++) {
    echo "<td style='border: 1px solid black; padding: 5px';>",$array[$i]."</td>";
}
echo "</tr></table>";



echo "<h1>Maximo: </h1>";
maximo($array);
echo "<h1>Minimo: </h1>";
minimo($array);
echo "<h1>Repetido: </h1>".repetido($array);
?>
</body>
</html>
