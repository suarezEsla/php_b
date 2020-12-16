<?php

//Modificar nombre y email de usuarios


include('db.php');
$usuario = '';
$email = '';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM usuarios WHERE id=$id";

    $resultado = mysqli_query($conexion, $query);

    if (mysqli_num_rows($resultado) == 1) {
        $fila = mysqli_fetch_array($resultado);

        $usuario = $fila['username'];
        $email = $fila['email'];
    }
}


if (isset($_POST['modificar'])) { //Si se pulsa el botón modificar

    $id = $_GET['id'];
    $usuario = $_POST['username'];
    $email = $_POST['email'];

    $query = "UPDATE usuarios set username='$usuario', email='$email' WHERE id=$id";

    mysqli_query($conexion, $query);
    header('Location: index.php');
}
?>

<?php include('includes/header.php'); ?>
<!--Formulario modificación de usuarios-->
<div class="container p-4">

    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <!--Formulario que llama al 'id' de la bd-->
                <form action="modificarusuario.php?id=<?php echo $_GET['id']; ?>" method="POST">

                    <!--Modificar username-->
                    <div class="form-group">
                        <input name="username" type="text" class="form-control" value="<?php echo $usuario; ?>" placeholder="Modificar usuario">
                    </div>

                    <!--Modificar email-->
                    <div class="form-group">
                        <input name="email" type="text" class="form-control" value="<?php echo $email; ?>" placeholder="Modificar email">
                    </div>

                    <!--Botón modificar-->
                    <button class="btn-info" name="modificar">
                        Modificar
                    </button>
                </form>
            </div>
        </div>
    </div>

</div>





<?php include('includes/footer.php'); ?>