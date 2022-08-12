<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="<?php echo BASE_URL ?>assets/img/varios/logo.png " type="image/x-icon">

    <!--=============== BOOTSTRAP ===============-->
    <?php require_once('_bootstrap.php') ?>

    <title>Guardar usuarios</title>
</head>

<body>
    <?php require_once('_nav.php') ?>

    <div class="container mt-5 pt-3">
        <h1 class="text-center">Guardar usuario</h1>

        <ul>
            <?php foreach($errores as $error): ?>
            <li class="text text-danger"><?php echo $error ?></li>
            <?php endforeach ?>
        </ul>

        <form action="<?php echo $action ?>" method="post">
            <div class="form-group mb-3">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre" autocomplete="off"
                    placeholder="Ingrese el nombre del usuario" value="<?php echo $usuario -> nombre ?>">
            </div>
            <div class="form-group mb-3">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" autocomplete="off"
                    placeholder="Ingrese el email del usuario" value="<?php echo $usuario -> email ?>">
            </div>
            <div class="form-group mb-3">
                <label for="categoria">Tipo de usuario</label>
                <select class="form-control" name="id_tipo_usuario" id="id_tipo_usuario">
                    <option value="">Ingrese el tipo de usuario</option>
                    <?php foreach($tipo_usuario as $t): ?>
                    <option <?php if($usuario -> id_tipo_usuario == $t -> id){ echo 'selected'; } ?>
                        value="<?php echo $t -> id ?>">
                        <?php echo $t -> nombre ?>
                    </option>
                    <?php endforeach ?>
                </select>
            </div>
            <input type="hidden" name="ide" value="<?php echo $usuario -> id ?>">
            <button type="submit" class="btn btn-success" name="submit">Guardar</button>
            <a class="btn btn-danger" href="usuarios.php">Cancelar</a>
        </form>
    </div>

    <!--=============== BOOTSTRAP JS ===============-->
    <?php require_once('_bootstrapJs.php') ?>
</body>

</html>