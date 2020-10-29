<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="form">
        <fieldset>
            <legend style="text-align: center;">Procesar 04.php</legend>
        <p>Nombre: <?php $nombre=$_GET['nombre'];echo $nombre;?></p>
    <p>Contraseña: <?php $pass=$_GET['pass'];echo $pass;?></p>
    <p>Semáforo: <?php $semaforo=$_REQUEST['semaforo'];echo $semaforo;?></p>
    <p>Estudios: <?php $estudios=$_REQUEST['estudios'];echo $estudios ?></p>
    <p>Equipo: <?php $equipo=$_REQUEST['equipo'];echo $equipo ?></p>
        </fieldset>
   
    </form>
    
</body>
</html>