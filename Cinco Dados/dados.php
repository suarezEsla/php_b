

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Juego Cinco Dados</title>
</head>
<body>

<h1>Juego Cinco Dados</h1>
<h2>@Esla Suárez Arquero</h2>
    
    <?php
define(1,"&#9856;");
define(2, "	&#9857;");
define(3,"&#9858;");
define(4,"&#9859;");
define(5,"&&#9860;");
define(6,"&#9861;");



    function jugador1(){
        $numAle=[];
        $suma=0;
        for ($i=0;$i<5;$i++){
            
            $aleatorio1=rand(1,6);
            echo constant($aleatorio1);
            array_push($numAle,$aleatorio1);
        }
        sort($numAle);
        array_shift($numAle);
        array_pop($numAle);
        for( $a=0;$a<count($numAle);$a++){
            $suma+=$numAle[$a];
        }

         

        echo "<br> Puntuación: ".$suma;  
    }
    


    
    
    function jugador2(){
        $numAle=[];
        $suma=0;
        for ($i=0;$i<5;$i++){
            
            $aleatorio1=rand(1,6);
            echo constant($aleatorio1);
            array_push($numAle,$aleatorio1);
        }
        sort($numAle);
        array_shift($numAle);
        array_pop($numAle);
        for( $a=0;$a<count($numAle);$a++){
            $suma+=$numAle[$a];
        }

         

        echo "<br> Puntuación: ".$suma;  
    }
    ?>



<table border="1">
    <tr>
        <th> <h1 class="jug">Jugador 1:</h1> </th>
        <th> <h1 class="dados1"><?php jugador1() ?></h1></th>
    </tr>
</table>
   
    

<table border="1">
<tr>
    <th><h1 class="jug">Jugador 2:</h1></th>
    <td><h1 class="dados2"><?php jugador2() ?></h1></td>
</tr>
</table>
</body>
</html>