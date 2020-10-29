<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
//Comparar dos arrays comparando sólo valores (array_diff)
$animales = array (
    "gato" => "Sunny",
    "perro" => "Stoichkov",
    "chimpancé" => "Muggles",
    "chinchilla" => "Herminia",
    "Charles",
    "oso" => "Tarzan"
);
$animales2 = array (
    "perro" => "Stoichkov",
    "gato" => "Sunny",
    "conejo" => "Tarzan",
    "Muggles"
);
$diferencia = array_diff($animales, $animales2);
var_dump($diferencia);


//Comparar dos arrays comparando keys y valores (array_diff_assoc)
$animales = array (
    "gato" => "Sunny",
    "perro" => "Stoichkov",
    "chimpancé" => "Muggles",
    "chinchilla" => "Herminia",
    "Charles",
    "Muggles",
    "oso" => "Tarzan"
);
$animales2 = array (
    "perro" => "Stoichkov",
    "gato" => "Sunny",
    "conejo" => "Tarzan",
    "Muggles"
);
$diferencia = array_diff_assoc($animales, $animales2);
var_dump($diferencia);

//Compara dos arrays comparando solo keys (array_diff_key)
$animales = array (
    "gato" => "Sunny",
    "perro" => "Stoichkov",
    "chimpancé" => "Muggles",
    "chinchilla" => "Herminia",
    "Charles",
    "Muggles",
    "oso" => "Tarzan"
);
$animales2 = array (
    "perro" => "Stoichkov",
    "gato" => "Sunny",
    "conejo" => "Tarzan",
    "Muggles"
);
$diferencia = array_diff_key($animales, $animales2);
var_dump($diferencia);



    ?>
</body>
</html>