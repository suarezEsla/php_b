<?php

require('Model/Conexion.php');//Conectamos

$con=new Conexion();//Nueva conexión

$usuarios=$con->getUsers();//llamamos a función
require('Views/V_verUsuarios.php');


?>