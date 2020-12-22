<?php

define ('GESTIONUSUARIOS','1');
define ('GESTIONFICHEROS','2');

// Fichero donde se guardan los datos
define('FILEUSER','app/dat/usuarios.json');
// Ruta donde se guardan los archivos de los usuarios
// Tiene que tener permiso 777 o permitir a Apache rwx
define('RUTA_FICHEROS','/home/alumno/dirpruebas');

// (0-Básico |1-Profesional |2- Premium| 3- Máster)
const  PLANES = ['Básico','Profesional','Premium','Máster'];
//  Estado: (A-Activo | B-Bloqueado |I-Inactivo )
const  ESTADOS = ['A' => 'Activo','B' =>'Bloqueado', 'I' => 'Inactivo']; 

// Definir otras constantes 


//Cotejar contraseñas:


    function hayMayusculas($clave){
        if(strtolower($clave) != $clave){
            return true;
        }
        return false;
    }
    
    function hayMinusculas($clave){
        if(strtoupper($clave) != $clave){
            return true;
        }
        return false;
    }
    
    function hayDigito($clave){
        return preg_match("/\d/", $clave);
    }
    
    function hayNoAlfanumeric($clave){
        if(!ctype_alnum($clave)){ //Si solo hay letras o numeros
            return true;
        }
        return false;
    }