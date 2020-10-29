<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Apuntes métodos Matemáticos</h1>
    <a href="https://www.php.net/manual/es/ref.math.php">Funciones matemáticas predefinidas</a>
    <h3>Redondeos , potencia , raiz cuadrada y logaritmo</h3>
   <?php 
   $num=-6.2654;
   $num1=3.54159;
   $num2=754;
   echo "<b>Devuelve el valor absoluto:</b><br>";
   echo "<b><ins>abs(numero)</ins></b> => Valor absoluto del número: ".$num." = ".abs($num)."<br>";
   echo "<b>Devuelve el valor entero inmediatamente superior a valor </b><br>";
   echo "<b><ins>ceil(valor)</ins></b> => Entero superior al número: ".$num1." = ".ceil($num1)."<br>";
   echo "<b>Devuelve el valor entero inmediatamente inferior a valor</b><br>";
   echo "<b><ins>floor(valor)</ins></b> => Entero inferior al número: ".$num1." = ".floor($num1)."<br>";
   echo "<b>Devuelve valor entero más próximo a valor</b><br>";
   echo "<b><ins>round(valor)</ins></b> => Entero más próximo al número: ".$num1." = ".round($num1)."<br>";
   echo "<b>Devuelve valor de la potencia de base elevado a exponente</b><br>";
   echo "<b><ins>pow(base,exp)</ins></b> => Potencia de base elevado a exponente de los números 2 y 4: ".pow(2,4)."<br>";
   echo "<b>Devuelve la raiz cuadrada de valor.</b><br>";
   echo "<b><ins>sqrt(valor)</ins></b> => Raíz cuadrada del número ".$num2." = ".sqrt($num2)."<br>";
   ?>
   <h3>Funciones de NUMEROS</h3>
   <p><strong><ins>Cambios de base</ins></strong></p></p>
   <?php
   echo "<b><ins>decoct(valor)</ins></b> =>Convierte valor de base 10 a base 8 <br>";
   echo "<b><ins>dechex(valor)</ins></b> =>Convierte valor de base 10 a base 16 <br>";
   echo "<b><ins>decbin(valor)</ins></b> =>Convierte valor de base 10 a base 2 <br>";
   echo "<b><ins>octdec(valor)</ins></b> =>Convierte valor de base 8 a base 10 <br>";
   echo "<b><ins>hexdec(valor)</ins></b> =>Convierte valor de base 16 a base 10 <br>";
   echo "<b><ins>bindec(valor)</ins></b> =>Convierte valor de base 2 a base 10 <br>";
   echo "<b><ins>base_convert(valor,b1,b2)</ins></b> => Convierte valor de base b1 a base b2 <br>";
   ?>
   <h3>Numeros ALEATORIOS</h3>
   <?php
   echo "<b><ins>rand([n1,n2])</ins></b> => Obtiene nº aleatorio con valor entre los valores n1 y n2.
   Si no se da rango lo obtiene entre 0 y el valor devuelto por la
   funcion getrandmax()<br>";


?>
   
</body>

</html>