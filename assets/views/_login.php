<div class="container-login">
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" enctype="multipart/form-data">
        <span class="login-title">Identificate</span>

        <!-- ERRORES -->
        <ul class="flex">
            <?php if ($error) : ?>
            <li class="error"><?php echo $error ?></li>
            <?php endif; ?>
        </ul>

        <div class="container-inputs">
            <div class="input-box">
                <input required type="text" name="email" autocomplete="off" class="form-control" placeholder="Email">
            </div>

            <div class="input-box">
                <input required type="password" name="password" autocomplete="off" class="form-control"
                    placeholder="<?php echo $lang['login_password_1']?>">
            </div>

            <div class="container-login-btn">
                <button name="submit" class="contact-form-btn"><?php echo $lang['login_btn']?></button>
            </div>
        </div>
    </form>

    <div class="return">
        <span class="text"><?php echo $lang['return_register']?>
            <br>
            <a href="register.php"><?php echo $lang['return_click']?></a>
        </span>
    </div>
</div>