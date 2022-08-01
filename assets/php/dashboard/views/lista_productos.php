<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="../../../assets/img/varios/logo.png " type="image/x-icon">

    <!--=============== BOOTSTRAP ===============-->
    <?php require_once('_bootstrap.php') ?>

    <title>Dashboard</title>
</head>

<body>
    <?php require_once('_nav.php') ?>

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Categoría</th>
                    <th scope="col">Acciones</th>
                    <th scope="col"><a href="agregar_producto.php" style="text-decoration: none;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-plus-lg" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
                            </svg>
                        </a></th>
                </tr>
            </thead>
            <tbody>
                <?php if(count($productos) > 0): ?>

                <?php foreach($productos as $pro): ?>
                <tr>
                    <td><?php echo $pro -> id ?></td>
                    <td><?php echo $pro -> nombre ?></td>
                    <td>$<?php echo number_format($pro -> precio, 2, ',', '.') ?></td>
                    <td><?php echo $pro -> nombre_categoria ?></td>
                    <td>
                        <a class="text text-primary" href="modificar_producto.php?ide=<?php echo $pro -> id ?>"><svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path
                                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                <path fill-rule="evenodd"
                                    d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                            </svg></a>
                        <a class="text text-danger" href="#"
                            onClick="eliminarProducto('eliminar_producto.php?ide=<?php echo $pro -> id ?>')"><svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                <path
                                    d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                            </svg></a>
                    </td>
                </tr>
                <?php endforeach ?>

                <?php else: ?>

                <tr>
                    <td colspan="5" class="text-center">No se han encontrado registros</td>
                </tr>

                <?php endif ?>

            </tbody>
        </table>

        <nav aria-label="..." class="d-flex justify-content-center">
            <ul class="pagination">
                <?php if($paginas['anterior']): ?>
                <li class="page-item">
                    <a class="page-link" href="?pag=<?php echo $paginas['primera'] ?>" tabindex="-1"><svg
                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-arrow-bar-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M12.5 15a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5zM10 8a.5.5 0 0 1-.5.5H3.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L3.707 7.5H9.5a.5.5 0 0 1 .5.5z" />
                        </svg></a>
                </li>
                <li class="page-item">
                    <a class="page-link"
                        href="?pag=<?php echo $paginas['anterior'] ?>"><?php echo $paginas['anterior'] ?></a>
                </li>
                <?php endif ?>
                <li class="page-item active">
                    <span class="page-link disabled" href="#"><?php echo $paginas['actual'] ?></span>
                </li>
                <?php if($paginas['siguiente']): ?>
                <li class="page-item">
                    <a class="page-link"
                        href="?pag=<?php echo $paginas['siguiente'] ?>"><?php echo $paginas['siguiente'] ?></a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="?pag=<?php echo $paginas['ultima'] ?>"><svg
                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-arrow-bar-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M6 8a.5.5 0 0 0 .5.5h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L12.293 7.5H6.5A.5.5 0 0 0 6 8zm-2.5 7a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5z" />
                        </svg></a>
                </li>
                <?php endif ?>
            </ul>
        </nav>
    </div>

    <!--=============== ELIMINAR PRODUCTO JS ===============-->
    <script>
    function eliminarProducto(p_url_eliminar) {

        Swal.fire({
            title: 'Está segura/o?',
            text: "Este registro no se podrá recuperar",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'Cancelar',
            confirmButtonText: 'Aceptar'
        }).then((result) => {
            if (result.isConfirmed) {
                location.href = p_url_eliminar;
            }
        });
    }
    </script>

    <!--=============== ALERTA ===============-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>