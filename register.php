<?php require_once 'assets/php/lang.php';?>

<!DOCTYPE html>
<html lang="es">

<head>
    <!--=============== HEAD DEFAULT ===============-->
    <?php require_once 'assets/php/dashboard/views/_head.php';?>

    <!--=============== ICONS ===============-->
    <?php require_once 'assets/php/dashboard/views/_icons.php';?>

    <!--=============== BOOTSTRAP ===============-->
    <?php require_once 'assets/php/dashboard/views/_bootstrap.php';?>

    <!--=============== CSS ===============-->
    <?php require_once 'assets/php/dashboard/views/_cssContacto.php';?>
</head>

<body>
    <div class="container-form">

        <?php require_once 'assets/php/dashboard/helpers/helper_input.php'?>
        <?php require_once 'assets/php/funcionesRegister.php'?>

        <form class="contact-form px-5" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST"
            enctype="multipart/form-data">
            <span class="contact-form-title"><?php echo $lang['register_titulo'] ?></span>

            <!-- ERRORES -->
            <ul class="flex">
                <?php foreach ($erroresRegister as $error): ?>
                <li class="error"><?php echo $error ?></li>
                <?php endforeach?>
            </ul>

            <div class="container-inputs">
                <div class="col-sm-12 mb-3">
                    <label class="form-label"><?php echo $lang['contacto_nombre'] ?></label>
                    <input required type="text" name="nameRegister" autocomplete="off" class="form-control"
                        value="<?php echo $nameRegister ?>">
                </div>

                <div class="col-sm-12 mb-3">
                    <label class="form-label">Email</label>
                    <input required type="text" name="emailRegister" autocomplete="off" class="form-control"
                        placeholder="<?php echo $lang['contacto_placeholder_email'] ?>"
                        value="<?php echo $emailRegister ?>">
                </div>

                <div class="col-sm-12 mb-3">
                    <label class="form-label"><?php echo $lang['login_password_1'] ?></label>
                    <input required type="password" name="passwordRegister1" autocomplete="off" class="form-control"
                        value="<?php echo $passwordRegister1 ?>">
                </div>

                <div class="col-sm-12 mb-3">
                    <label class="form-label"><?php echo $lang['register_password_2'] ?></label>
                    <input required type="password" name="passwordRegister2" autocomplete="off" class="form-control"
                        value="<?php echo $passwordRegister2 ?>">
                </div>

            </div>

            <div class="container-contact-form-btn">
                <div class="wrap-contact-form-btn">
                    <div class="contact-form-bgbtn"></div>
                    <button name="submit" class="contact-form-btn"><?php echo $lang['register_btn'] ?></button>
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
                <!-- IR AL LOGIN -->
                <span class="text"><?php echo $lang['return_login']?>
                    <a href="login.php" class="text"><?php echo $lang['return_click']?></a>
                </span>
                
                <br>

                <!-- IR AL INICIO -->
                <span class="text"><?php echo $lang['return_index']?>
                    <a href="index.php" class="text"><?php echo $lang['return_click']?></a>
                </span>
            </div>
        </form>
    </div>

    <!--=============== LOCAL JS ===============-->
    <script src="assets/js/login.js"></script>

    <!--=============== GLOBAL JS ===============-->
    <script src="assets/js/btnLang.js"></script>
</body>

</html>