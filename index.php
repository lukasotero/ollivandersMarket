<?php require_once('assets/php/lang.php'); ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <!--=============== HEAD DEFAULT ===============-->
    <?php require_once('assets/php/dashboard/views/_head.php'); ?>

    <!--=============== ICONS ===============-->
    <?php require_once('assets/php/dashboard/views/_icons.php'); ?>

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

    <!--=============== JQUERY ===============-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>

    <!--=============== CSS LOCAL ===============-->
    <link rel="stylesheet" href="assets/css/styles.css">

    <!--=============== RESPONSIVE ===============-->
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>
    <!--==================== HEADER ====================-->
    <header>
        <nav class="flex-column">
            <ul class="container-logo">
                <li class="logo flex"><img src="assets/img/varios/logo.png"></li>
                <li class="text-logo"><a href="index.php">Ollivander's</a></li>
            </ul>

            <!-- BOTON LANG -->
            <div class="card">
                <ul class="langButton">
                    <li id="btnEs"><a href="?lang=es"><span class="fi fi-es"></span></a></li>
                    <li id="btnPt"><a href="?lang=pt"><span class="fi fi-pt"></span></a></li>
                    <li id="btnEn"><a href="?lang=en"><span class="fi fi-us"></span></a></li>
                </ul>
            </div>

            <a href="login.php" class="d-none"><button
                    class="btn-primary"><?php echo $lang['header_iniciarSesion']?></button></a>
            <div class="btn-hamburguesa">
                <button type="button" class="hamburger">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </button>
            </div>

            <ul class="container-btn-hamburguesa">
                <li class="item btn-secondary"><a href="index.php"><?php echo $lang['header_inicio']?></a></li>
                <li class="item btn-secondary"><a href="#aboutUs"><?php echo $lang['header_nosotros']?></a></li>
                <li class="item btn-secondary"><a href="productos_home.php"><?php echo $lang['header_productos']?></a>
                </li>
                <li class="item btn-secondary"><a href="contacto.php"><?php echo $lang['header_contacto']?></a></li>
                <a href="login.php" class="d-block"><button
                        class="item btn-primary"><?php echo $lang['header_iniciarSesion']?></button></a>
            </ul>
        </nav>
    </header>

    <main class="main">
        <!--==================== HOME ====================-->
        <section class="home" id="home">
            <div class="swiper home-swiper">
                <div class="swiper-wrapper">
                    <!--========== SLIDER 1 ==========-->
                    <section class="swiper-slide">
                        <div class="home__grupo">
                            <img src="assets/img/destacados/bufanda.png" class="home__img img-bufanda">

                            <div class="home__detalles-img">
                                <h4 class="home__detalles-titulo">Gryffindor</h4>
                                <span class="home__detalles-subtitulo"><?php echo $lang['categoria_1']?></span>
                                <div class="home__indicador"></div>
                            </div>
                        </div>

                        <div class="container-data">
                            <div class="home__data">
                                <h3 class="home__subtitulo"><?php echo $lang['slider1_titulo']?></h3>
                                <h1 class="home__titulo"><?php echo $lang['slider1_subtitulo']?></h1>
                                <p class="home__descripcion"><?php echo $lang['slider1_descripcion']?></p>
                            </div>

                            <div class="home__btns">
                                <a href="#" class="btn"><?php echo $lang['slider1_btn_1']?></a>
                                <a href="#" class="btn--link btn--flex"><?php echo $lang['slider1_btn_2']?><i
                                        class="bx bx-right-arrow-alt btn__icon"></i></a>
                            </div>
                        </div>
                    </section>

                    <!--========== SLIDER 2 ==========-->
                    <section class="swiper-slide">
                        <div class="home__grupo">
                            <img src="assets/img/destacados/collar.png" class="home__img img-collar">

                            <div class="home__detalles-img">
                                <h4 class="home__detalles-titulo"><?php echo $lang['slider2_titulo']?></h4>
                                <span class="home__detalles-subtitulo"><?php echo $lang['categoria_2']?></span>
                                <div class="home__indicador"></div>
                            </div>
                        </div>

                        <div class="container-data">
                            <div class="home__data">
                                <h3 class="home__subtitulo"><?php echo $lang['slider1_titulo']?></h3>
                                <h1 class="home__titulo"><?php echo $lang['slider2_subtitulo']?></h1>
                                <p class="home__descripcion"><?php echo $lang['slider2_descripcion']?></p>
                            </div>

                            <div class="home__btns">
                                <a href="#" class="btn"><?php echo $lang['slider1_btn_1']?></a>
                                <a href="#" class="btn--link btn--flex"><?php echo $lang['slider2_btn_2']?><i
                                        class="bx bx-right-arrow-alt btn__icon"></i></a>
                            </div>
                        </div>

                    </section>

                    <!--========== SLIDER 3 ==========-->
                    <section class="swiper-slide">
                        <div class="home__grupo">
                            <img src="assets/img/destacados/mapa.png" class="home__img img-mapa">

                            <div class="home__detalles-img">
                                <h4 class="home__detalles-titulo"><?php echo $lang['slider3_titulo']?></h4>
                                <span class="home__detalles-subtitulo"><?php echo $lang['categoria_2']?></span>
                                <div class="home__indicador"></div>
                            </div>
                        </div>

                        <div class="container-data">
                            <div class="home__data">
                                <h3 class="home__subtitulo"><?php echo $lang['slider1_titulo']?></h3>
                                <h1 class="home__titulo"><?php echo $lang['slider3_subtitulo']?><h1>
                                        <p class="home__descripcion"><?php echo $lang['slider3_descripcion']?></p>
                            </div>

                            <div class="home__btns">
                                <a href="#" class="btn"><?php echo $lang['slider1_btn_1']?></a>
                                <a href="#" class="btn--link btn--flex"><?php echo $lang['slider3_btn_2']?><i
                                        class="bx bx-right-arrow-alt btn__icon"></i></a>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>

        <!--==================== ACERCA DE NOSOTROS ====================-->
        <section class="section" id="aboutUs">
            <div class="container flex-column about__data">
                <img src="assets/img/varios/sombrero.png" class="about__img">

                <h2 class="section__titulo"><?php echo $lang['aboutUs_titulo']?> <b>Ollivander's</b><br>Market</h2>
                <p class="about__descripcion"><?php echo $lang['aboutUs_descripcion']?></p>
                <a href="#" class="btn"><?php echo $lang['aboutUs_btn']?></a>
            </div>
        </section>

        <!--==================== CASAS ====================-->
        <section class="section" id="casas">
            <div class="container flex">
                <h2 class="section__titulo"><?php echo $lang['casas_titulo']?></h2>
                <div class="flex-column">
                    <div class="casas__data">
                        <img src="assets/img/casas/gryffindor.png" class="casas__img">
                        <h3>Gryffindor</h3>
                    </div>

                    <div class="casas__data hufflepuff-fix">
                        <img src="assets/img/casas/hufflepuff.png" class="casas__img">
                        <h3>Hufflepuff</h3>
                    </div>
                </div>

                <div class="flex-column">
                    <div class="casas__data">
                        <img src="assets/img/casas/slytherin.png" class="casas__img">
                        <h3>Slytherin</h3>
                    </div>

                    <div class="casas__data ravenclaw-fix">
                        <img src="assets/img/casas/ravenclaw.png" class="casas__img">
                        <h3>Ravenclaw</h3>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== PRODUCTOS ====================-->
        <section class="section" id="product">
            <div class="container flex">
                <h2 class="section__titulo"><?php echo $lang['productos_titulo']?></h2>

                <div class="product__contenido">
                    <img src="assets/img/varitas/ronWeasley.png" class="product__img">
                    <h3 class="product__titulo">Ron Weasley</h3>
                    <span class="product__subtitulo"><?php echo $lang['productos_subtitulo']?></span>
                    <span class="product__precio">$59.99</span>
                    <button class="btn product__btn">
                        <i class="bx bx-cart-alt product__icon"></i>
                    </button>
                </div>

                <div class="product__contenido">
                    <img src="assets/img/varitas/voldemort.png" class="product__img">
                    <h3 class="product__titulo">Voldemort</h3>
                    <span class="product__subtitulo"><?php echo $lang['productos_subtitulo']?></span>
                    <span class="product__precio">$59.99</span>
                    <button class="btn product__btn">
                        <i class="bx bx-cart-alt product__icon"></i>
                    </button>
                </div>

                <div class="product__contenido">
                    <img src="assets/img/varitas/nicolasFlamel.png" class="product__img">
                    <h3 class="product__titulo">Nicolas Flamel</h3>
                    <span class="product__subtitulo"><?php echo $lang['productos_subtitulo']?></span>
                    <span class="product__precio">$59.99</span>
                    <button class="btn product__btn">
                        <i class="bx bx-cart-alt product__icon"></i>
                    </button>
                </div>

                <div class="product__contenido">
                    <img src="assets/img/varitas/narcisaMalfoy.png" class="product__img">
                    <h3 class="product__titulo">Narcisa Malfoy</h3>
                    <span class="product__subtitulo"><?php echo $lang['productos_subtitulo']?></span>
                    <span class="product__precio">$59.99</span>
                    <button class="btn product__btn">
                        <i class="bx bx-cart-alt product__icon"></i>
                    </button>
                </div>

                <div class="product__contenido">
                    <img src="assets/img/varitas/harryPotter.png" class="product__img">
                    <h3 class="product__titulo">Harry Potter</h3>
                    <span class="product__subtitulo"><?php echo $lang['productos_subtitulo']?></span>
                    <span class="product__precio">$59.99</span>
                    <button class="btn product__btn">
                        <i class="bx bx-cart-alt product__icon"></i>
                    </button>
                </div>

                <div class="product__contenido">
                    <img src="assets/img/varitas/sauco.png" class="product__img">
                    <h3 class="product__titulo">Sauco</h3>
                    <span class="product__subtitulo"><?php echo $lang['productos_subtitulo']?></span>
                    <span class="product__precio">$59.99</span>
                    <button class="btn product__btn">
                        <i class="bx bx-cart-alt product__icon"></i>
                    </button>
                </div>
            </div>
        </section>

        <!--==================== DESCUENTOS ====================-->
        <section class="section">
            <div class="flex">
                <div class="descuento__container flex-column">
                    <h2 class="descuento__titulo"><?php echo $lang['descuentos_titulo']?></h2>
                    <img src="assets/img/varios/caramelos.png" class="descuento__img">
                    <a href="#" class="btn"><?php echo $lang['descuentos_btn']?></a>
                </div>
            </div>
        </section>

        <!--==================== NUEVOS PRODUCTOS ====================-->
        <section class="section" id="nuevo">
            <div class="container">
                <h2 class="section__titulo"><?php echo $lang['nuevo_titulo']?></h2>

                <div class="swiper new-swiper">
                    <div class="swiper-wrapper">

                        <!-- PRODUCTO 1 -->
                        <div class="nuevo__contenido swiper-slide">
                            <div class="nuevo__tag"><?php echo $lang['nuevo_etiqueta']?></div>
                            <img src="assets/img/funkos/funkoDumbledore.png" class="nuevo__img">
                            <h3 class="nuevo__titulo">Albus Dumbledore</h3>
                            <span class="nuevo__subtitulo"><?php echo $lang['categoria_2']?></span>

                            <div class="nuevo__precios">
                                <span class="nuevo__precio">$14.99</span>
                                <span class="nuevo__descuento">$29.99</span>
                            </div>

                            <button class="btn nuevo__btn">
                                <i class="bx bx-cart-alt nuevo__icon"></i>
                            </button>
                        </div>

                        <!-- PRODUCTO 2 -->
                        <div class="nuevo__contenido swiper-slide">
                            <div class="nuevo__tag"><?php echo $lang['nuevo_etiqueta']?></div>
                            <img src="assets/img/funkos/funkoHarryPotter.png" class="nuevo__img">
                            <h3 class="nuevo__titulo">Harry Potter</h3>
                            <span class="nuevo__subtitulo"><?php echo $lang['categoria_2']?></span>

                            <div class="nuevo__precios">
                                <span class="nuevo__precio">$11.99</span>
                                <span class="nuevo__descuento">$21.99</span>
                            </div>

                            <button class="btn nuevo__btn">
                                <i class="bx bx-cart-alt nuevo__icon"></i>
                            </button>
                        </div>

                        <!-- PRODUCTO 3 -->
                        <div class="nuevo__contenido swiper-slide">
                            <div class="nuevo__tag"><?php echo $lang['nuevo_etiqueta']?></div>
                            <img src="assets/img/tunicas/tunicaRavenclaw.png" class="nuevo__img">
                            <h3 class="nuevo__titulo"><?php echo $lang['nuevo_producto_3_rav']?></h3>
                            <span class="nuevo__subtitulo"><?php echo $lang['categoria_2']?></span>

                            <div class="nuevo__precios">
                                <span class="nuevo__precio">$4.99</span>
                                <span class="nuevo__descuento">$9.99</span>
                            </div>

                            <button class="btn nuevo__btn">
                                <i class="bx bx-cart-alt nuevo__icon"></i>
                            </button>
                        </div>

                        <!-- PRODUCTO 4 -->
                        <div class="nuevo__contenido swiper-slide">
                            <div class="nuevo__tag"><?php echo $lang['nuevo_etiqueta']?></div>
                            <img src="assets/img/libros/sagaCompleta.png" class="nuevo__img">
                            <h3 class="nuevo__titulo"><?php echo $lang['nuevo_producto_4']?></h3>
                            <span class="nuevo__subtitulo"><?php echo $lang['categoria_3']?></span>

                            <div class="nuevo__precios">
                                <span class="nuevo__precio">$24.99</span>
                                <span class="nuevo__descuento">$44.99</span>
                            </div>

                            <button class="btn nuevo__btn">
                                <i class="bx bx-cart-alt nuevo__icon"></i>
                            </button>
                        </div>

                        <!-- PRODUCTO 5 -->
                        <div class="nuevo__contenido swiper-slide">
                            <div class="nuevo__tag"><?php echo $lang['nuevo_etiqueta']?></div>
                            <img src="assets/img/libros/laOrdenDelFenix.png" class="nuevo__img">
                            <h3 class="nuevo__titulo"><?php echo $lang['nuevo_producto_5']?></h3>
                            <span class="nuevo__subtitulo"><?php echo $lang['categoria_3']?></span>

                            <div class="nuevo__precios">
                                <span class="nuevo__precio">$5.99</span>
                                <span class="nuevo__descuento">$12.99</span>
                            </div>

                            <button class="btn nuevo__btn">
                                <i class="bx bx-cart-alt nuevo__icon"></i>
                            </button>
                        </div>

                        <!-- PRODUCTO 6 -->
                        <div class="nuevo__contenido swiper-slide">
                            <div class="nuevo__tag"><?php echo $lang['nuevo_etiqueta']?></div>
                            <img src="assets/img/libros/elMisterioDelPrincipe.png" class="nuevo__img">
                            <h3 class="nuevo__titulo"><?php echo $lang['nuevo_producto_6']?></h3>
                            <span class="nuevo__subtitulo"><?php echo $lang['categoria_3']?></span>

                            <div class="nuevo__precios">
                                <span class="nuevo__precio">$7.99</span>
                                <span class="nuevo__descuento">$14.99</span>
                            </div>

                            <button class="btn nuevo__btn">
                                <i class="bx bx-cart-alt nuevo__icon"></i>
                            </button>
                        </div>

                        <!-- PRODUCTO 7 -->
                        <div class="nuevo__contenido swiper-slide">
                            <div class="nuevo__tag"><?php echo $lang['nuevo_etiqueta']?></div>
                            <img src="assets/img/tunicas/tunicaGryffindor.png" class="nuevo__img">
                            <h3 class="nuevo__titulo"><?php echo $lang['nuevo_producto_3_gry']?></h3>
                            <span class="nuevo__subtitulo"><?php echo $lang['categoria_1']?></span>

                            <div class="nuevo__precios">
                                <span class="nuevo__precio">$7.99</span>
                                <span class="nuevo__descuento">$14.99</span>
                            </div>

                            <button class="btn nuevo__btn">
                                <i class="bx bx-cart-alt nuevo__icon"></i>
                            </button>
                        </div>

                        <!-- PRODUCTO 8 -->
                        <div class="nuevo__contenido swiper-slide">
                            <div class="nuevo__tag"><?php echo $lang['nuevo_etiqueta']?></div>
                            <img src="assets/img/tunicas/tunicaSlytherin.png" class="nuevo__img">
                            <h3 class="nuevo__titulo"><?php echo $lang['nuevo_producto_3_sly']?></h3>
                            <span class="nuevo__subtitulo"><?php echo $lang['categoria_1']?></span>

                            <div class="nuevo__precios">
                                <span class="nuevo__precio">$7.99</span>
                                <span class="nuevo__descuento">$14.99</span>
                            </div>

                            <button class="btn nuevo__btn">
                                <i class="bx bx-cart-alt nuevo__icon"></i>
                            </button>
                        </div>

                        <!-- PRODUCTO 9 -->
                        <div class="nuevo__contenido swiper-slide">
                            <div class="nuevo__tag"><?php echo $lang['nuevo_etiqueta']?></div>
                            <img src="assets/img/funkos/funkoEspectroPatronus.png" class="nuevo__img">
                            <h3 class="nuevo__titulo">Expecto Patronus</h3>
                            <span class="nuevo__subtitulo"><?php echo $lang['categoria_2']?></span>

                            <div class="nuevo__precios">
                                <span class="nuevo__precio">$7.99</span>
                                <span class="nuevo__descuento">$14.99</span>
                            </div>

                            <button class="btn nuevo__btn">
                                <i class="bx bx-cart-alt nuevo__icon"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!--==================== FOOTER ====================-->
    <footer class="footer section">
        <div class="footer__container container flex-column">
            <div class="footer__contenido">
                <a href="#" class="footer__logo">
                    <img src="assets/img/varios/logo.png" class="footer__logo-img">
                    Ollivander's Market
                </a>

                <p class="footer__descripcion"><?php echo $lang['footer_descripcion']?></p>

                <div class="footer__social">
                    <a href="https://www.facebook.com/" target="_blank" class="footer__social-link">
                        <i class="bx bxl-facebook"></i>
                    </a>
                    <a href="https://www.instagram.com/" target="_blank" class="footer__social-link">
                        <i class="bx bxl-instagram-alt"></i>
                    </a>
                    <a href="https://twitter.com/" target="_blank" class="footer__social-link">
                        <i class="bx bxl-twitter"></i>
                    </a>
                </div>
            </div>

            <div class="footer__contenido">
                <h3 class="footer__titulo"><?php echo $lang['footer_titulo_2']?></h3>

                <ul class="footer__links">
                    <li><a href="#aboutUs" class="footer__link"><?php echo $lang['header_nosotros']?></a></li>
                    <li><a href="#casas" class="footer__link"><?php echo $lang['footer_link_2']?> Hogwarts</a></li>
                    <li><a href="#nuevo" class="footer__link"><?php echo $lang['nuevo_titulo']?></a></li>
                    <li><a href="login.php" class="footer__link"><?php echo $lang['footer_link_4']?> Hogwarts</a></li>
                </ul>
            </div>

            <div class="footer__contenido">
                <h3 class="footer__titulo"><?php echo $lang['footer_titulo_3']?></h3>

                <ul class="footer__links">
                    <li><a href="#" class="footer__link"><?php echo $lang['footer_link_5']?></a></li>
                    <li><a href="#" class="footer__link"><?php echo $lang['footer_link_6']?></a></li>
                    <li><a href="#" class="footer__link"><?php echo $lang['footer_link_7']?></a></li>
                </ul>
            </div>
        </div>

        <span class="footer__copy">&#169; Lucas De Palma, Tomas Ruiz y Lukas Otero.
            <?php echo $lang['footer_copy']?>.</span>

        <img src="assets/img/personajes/dumbledore.png" class="footer__dumbledore">
        <img src="assets/img/personajes/voldemort.png" class="footer__voldemort">
    </footer>

    <!--=============== SCROLL UP ===============-->
    <a href="#" class="scrollup" id="scroll-up">
        <i class="bx bx-up-arrow-alt scrollup__icon"></i>
    </a>

    <!--=============== BOOTSTRAP POPPER ===============-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>

    <!--=============== SCROLL REVEAL ===============-->
    <script src="assets/js/scrollreveal.min.js"></script>

    <!--=============== SWIPER JS ===============-->
    <script src="assets/js/swiper-bundle.min.js"></script>

    <!--=============== LOCAL JS ===============-->
    <script src="assets/js/index.js"></script>

    <!--=============== GLOBAL JS ===============-->
    <script src="assets/js/btnLang.js"></script>
</body>

</html>