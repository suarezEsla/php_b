<?php
$array1=array("Manuel"=>"1234","Rosa"=>"3333","Maria"=>"4444");

$correcto=false;

print "<pre>";
$nom=$_GET['nombre'];
echo "<br>";
$clave=$_GET['pass'];
echo "<br>";
print "</pre>";


foreach($array1 as $c => $v){
    if ($nom==$c&&$clave==$v){
$correcto=true;
        
    }
}
if ($correcto){
    echo "<h1>Bienvenido! </h1>";
}else{
    echo "<h1>Usuario o contraseña erróneos. </h1>";
}
?>