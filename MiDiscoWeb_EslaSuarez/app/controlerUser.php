<?php
// ------------------------------------------------
// Controlador que realiza la gestión de usuarios
// ------------------------------------------------
include_once 'config.php';
include_once 'modeloUser.php';



/*
 * Inicio Muestra o procesa el formulario (POST)
 */

function  ctlUserInicio(){
    $msg = "";
    $user ="";
    $clave ="";
    if ( $_SERVER['REQUEST_METHOD'] == "POST"){
        if (isset($_POST['user']) && isset($_POST['clave'])){
            $user = $_POST['user'];
            $clave = $_POST['clave'];
            if ( modeloOkUser($user,$clave)){
                $_SESSION['user'] = $user;
                $_SESSION['tipouser'] = modeloObtenerTipo($user);
                if ( $_SESSION['tipouser'] == 3){
                    $_SESSION['modo'] = GESTIONUSUARIOS;
                    header('Location:index.php?orden=VerUsuarios');
                }
                else {
                  // Usuario normal;
                  // PRIMERA VERSIÓN SOLO USUARIOS ADMISTRADORES
                  $msg="Error: Acceso solo permitido a usuarios Administradores.";
                  unset($_SESSION['user']);
                  // $_SESSION['modo'] = GESTIONFICHEROS;
                  // Cambio de modo y redireccion a verficheros
                }
            }
            else {
                $msg="Error: usuario y contraseña no válidos.";
           }  
        }
    }
    
    include_once 'plantilla/facceso.php';
}

function ctlUserAlta(){
    $user  = "";
    $nombre  = "";
    $clave1   = "";
    $clave2   = "";
    $mail = "";
    $nplan = "";
    $msg = "";
    
    if ( $_SERVER['REQUEST_METHOD'] == "POST"){
        
        if(empty($_POST['user']) || empty($_POST['nombre']) || empty($_POST['clave1']) || empty($_POST['clave2'])||empty($_POST['mail'])){
            $msg = VACIO;
        }else{
            
            
            $user  = $_POST['user'];
            $nombre  = $_POST['nombre'];
            $clave1   = $_POST['clave1'];
            $clave2   = $_POST['clave2'];
            $mail = $_POST['mail'];
            $nplan = $_POST['nplan'];
            $estado = ($nplan == 3)? "A" : "I";
            
            
            if($msg == ""){
                if(modeloUserNuevo($user, [$clave1, $nombre, $mail, $nplan, $estado])){
                    $msg = "Registrado correctamente";
                    header('location:index.php?orden=VerUsuarios');
                    exit();
                }else{
                    $msg = "ERROR: No se ha podido completar el registo.";
                }
            }
        }
    }
    
    include_once 'plantilla/fnuevo.php';
}

function ctlUserDetalles(){
    
    $user = $_GET['id'];
    $datosusuario = modeloUserGet($user);
    $clave = $datosusuario[0];
    $nombre = $datosusuario[1];
    $mail = $datosusuario[2];
   
    
    include_once 'plantilla/verdetalles.php';
    
}

function ctlUserModificar(){
    
    if ( $_SERVER['REQUEST_METHOD'] == "GET"){
        $datosusuario = modeloUserGet($_GET['id']);
        
        $user = $_GET['id'];
        $_SESSION['id'] = $user;
        $clave = $datosusuario[0];
        $nombre = $datosusuario[1];
        $mail = $datosusuario[2];
        $nplan= $datosusuario[3];
        $estado= $datosusuario[4];
        
    }
    
    if ( $_SERVER['REQUEST_METHOD'] == "POST"){
        
        if(empty($_POST['nombre']) || empty($_POST['clave']) ||empty($_POST['mail'])){
            $msg = VACIO;
        }else{
            
            
            $user  = $_SESSION['id'];
            $nombre  = $_POST['nombre'];
            $clave   = $_POST['clave'];
            $mail = $_POST['mail'];
            $nplan = $_POST['nplan'];
            $estado= $_POST['estado'];
            
            
            if($msg == ""){
                if(modeloUserUpdate($user, [$clave, $nombre, $mail, $nplan, $estado])){
                    $msg = "Datos Actualizados";
                    header('location:index.php?orden=VerUsuarios');
                    exit();
                }else{
                    $msg = "ERROR: No se ha podido realizar la modificación.";
                }
            }
        }
    }
    
    include_once 'modificaruser.php';
  
}

function ctlUserBorrar(){
    $user = $_GET['id'];
    modeloUserDel($user);

}

// Cierra la sesión y vuelva los datos
function ctlUserCerrar(){
    session_destroy();
    modeloUserSave();
    header('Location:index.php');
}

// Muestro la tabla con los usuario 
function ctlUserVerUsuarios (){
    // Obtengo los datos del modelo
    $usuarios = modeloUserGetAll(); 
    // Invoco la vista 
    include_once 'plantilla/verusuariosp.php';
   
}