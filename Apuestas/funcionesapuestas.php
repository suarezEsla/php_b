<?php

function apostar(){
   
if(isset($_REQUEST['cantidadUsuario'])){
    $cantApuesta=$_REQUEST['cantidadUsuario'];//Se lee la cantidad que ha introducido el usuario
    echo "El usuario apuesta: ".$cantApuesta."<br>";
    $aleatorio=rand(1,100);//Se saca un número aleatorio
    echo "Número de la máquina: ".$aleatorio."<br>";
    if ($aleatorio%2==0){//Si es par, gana y se le dobla la cantidad
        $cantApuesta=$cantApuesta*2;
        
        echo "Has ganado<br>";
        return true;
    }else{
        $cantApuesta=$cantApuesta/2;//Si es impar, pierde y se le divide la cantidad
        echo "Has perdido<br>";
        return false;
    }
}else{
    echo "No ha introducido ninguna cantidad.<br>";
}

}


?>