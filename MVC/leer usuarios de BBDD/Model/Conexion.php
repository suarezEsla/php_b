<?php


class Conexion{
    private $con;//Variable para conexión.
    public function __construct(){//Constructor de la conexión sin parámetros.
        $this->con = new mysqli('localhost','root','','facebookPeroRojo');//$con llama a la BBDD.
        //'localhost','usuario','contraseña','nombreBBDD'.

    }

    public function getUsers(){//Función para hacer una consulta a la tabla 'usuarios.
        $query= $this->con->query('SELECT*FROM usuarios');//Almaceno la consulta en $query.
    
$i=0;
    
    while($fila=$query->fetch_assoc()){//recorremos las filas de la tabla usuarios con $query, (consulta).
        $retorno[$i]=$fila;
        $i++;
    }
    return $retorno;//Devolvemos resultado
}
}
?>