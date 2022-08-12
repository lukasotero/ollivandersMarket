<!DOCTYPE html>
<html lang="es">

<head>
    <!--=============== HEAD DEFAULT ===============-->
    <?php require_once 'assets/views/_head.php';?>

    <!--=============== ICONS ===============-->
    <?php require_once 'assets/views/_icons.php';?>

    <!--=============== BOOTSTRAP ===============-->
    <?php require_once 'assets/views/_bootstrap.php';?>

    <!--=============== CSS ===============-->
    <?php require_once 'assets/views/_cssContacto.php';?>
</head>

<body>
    <div class="container-form">
        <form class="contact-form px-5" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST"
            enctype="multipart/form-data">
            <span class="contact-form-title"><?php echo $lang['header_contacto'] ?></span>

            <ul class="flex-form">
                <?php foreach ($errores as $error): ?>
                <li class="error"><?php echo $error ?></li>
                <?php endforeach?>
            </ul>

            <div class="container-inputs">
                <div class="col-sm-12 mb-3">
                    <label class="form-label"><?php echo $lang['contacto_nombre'] ?></label>
                    <input required type="text" name="name" autocomplete="off" class="form-control">
                </div>

                <div class="col-sm-12 mb-3">
                    <label class="form-label">Email</label>
                    <input required type="text" name="email" autocomplete="off" class="form-control"
                        placeholder="<?php echo $lang['contacto_placeholder_email'] ?>">
                </div>

                <div class="col-sm-12 mb-3">
                    <label class="form-label"><?php echo $lang['contacto_mensaje'] ?></label>
                    <textarea required name="msg" autocomplete="off" class="form-control"
                        placeholder="<?php echo $lang['contacto_placeholder_mensaje'] ?>"></textarea>
                </div>
            </div>

            <div class="container-contact-form-btn">
                <div class="wrap-contact-form-btn">
                    <div class="contact-form-bgbtn"></div>
                    <button name="submit" class="contact-form-btn"><?php echo $lang['contacto_btn'] ?></button>
                </div>
            </div>

            <!-- BOTON LANG -->
            <div class="flex">
                <div class="card">
                    <ul class="langButton">
                        <li id="btnEs"><a href="?lang=es"><span class="fi fi-es"></span></a></li>
                        <li id="btnPt"><a href="?lang=pt"><span class="fi fi-pt"></span></a></li>
                        <li id="btnEn"><a href="?lang=en"><span class="fi fi-us"></span></a></li>
                    </ul>
                </div>
            </div>

            <div class="return">
                <!-- IR AL INICIO -->
                <span class="text"><?php echo $lang['return_index']?>
                    <a href="index.php" class="text"><?php echo $lang['return_click']?></a>
                </span>
            </div>
        </form>
    </div>

    <!--=============== GLOBAL JS ===============-->
    <script src="assets/js/btnLang.js"></script>
</body>

</html>