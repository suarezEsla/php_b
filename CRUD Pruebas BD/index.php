<?php include('db.php');

include('includes/header.php'); ?>

<main class="container p-4">
    <!--Contiene todo-->
    <div class="row">
        <div class="col-md-4">
            <!--Cuatro columnas-->


            <!--Formulario de usuarios-->
            <div class="card card-body">
                <form name="formulario" action="registrarusuario.php" method='POST'>

                    <div class="form-group">
                        <input type="text" name="username" class="form-control" placeholder="Usuario">

                        <input type="email" name="email" class="form-control" placeholder="e-mail">

                        <input type="password" name="pass1" class="form-control" placeholder="Contraseña">

                        <!-- <input type="password" name="pass2" class="form-control" placeholder="Repita la contraseña"> -->
                    </div>
                    <input type="submit" name="registrarse" class="btn btn-outline-info" value="Registrarse">



            </div>
            </form>
        </div>
    </div>



    <div class="col-md-8">
        <!--Tabla para mostrar usuarios registrados-->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Usuario</th>
                    <th>email</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $query = "SELECT * FROM usuarios";
                $result_usuarios = mysqli_query($conexion, $query);

                while ($fila = mysqli_fetch_assoc($result_usuarios)) { ?>

                    <!--Imprimo usuarios en la tabla-->
                    <tr>
                        <td><?php echo $fila['username']; ?></td>
                        <td><?php echo $fila['email']; ?></td>
                        <td>

                            <!--Botón de editar-->
                            <a href="modificarusuario.php?id=<?php echo $fila['id'] ?>" class="btn btn-secondary">

                                <em class="fas fa-marker"></em>
                            </a>
                            <!--Botón de borrar-->
                            <a href="borrarusuario.php?id=<?php echo $fila['id'] ?>" class="btn btn-danger">
                                <em class="far fa-trash-alt"></em>
                            </a>

                        <?php } ?>
                        </td>
                    </tr>
    </div>
</main>
<?php include('includes/footer.php'); ?>