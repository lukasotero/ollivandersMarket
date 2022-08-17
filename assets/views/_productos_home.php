<!DOCTYPE html>
<html lang="es">

<head>
    <!--=============== HEAD DEFAULT ===============-->
    <?php require_once('assets/views/_head.php'); ?>

    <!--=============== ICONS ===============-->
    <?php require_once('assets/views/_icons.php'); ?>

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

            <!-- BOTON LOGIN -->
            <button type="button" class="open-modal">
                <svg class="login-svg" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-person" viewBox="0 0 16 16">
                    <path
                        d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                </svg>
            </button>

            <div class="modal">
                <div class="modal-dialog">
                    <button class="close-modal">✕</button>

                    <?php if(Auth::isAdministrador()) { require_once('assets/views/_admin.php'); } ?>
                    <?php if(Auth::isComprador()) { require_once('assets/views/_usuario.php'); } ?>
                    <?php if(!Auth::validate()) { require_once('assets/views/_login.php'); } ?>
                </div>
            </div>

            <div class="btn-hamburguesa">
                <button type="button" class="hamburger">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </button>
            </div>

            <ul class="container-btn-hamburguesa">
                <li class="item btn-secondary">
                    <a href="index.php"><?php echo $lang['header_inicio']?></a>
                </li>
                <li class="item btn-secondary">
                    <a href="#aboutUs"><?php echo $lang['header_nosotros']?></a>
                </li>
                <li class="item btn-secondary">
                    <a href="productos_home.php"><?php echo $lang['header_productos']?></a>
                </li>
                <li class="item btn-secondary">
                    <a href="contacto.php"><?php echo $lang['header_contacto']?></a>
                </li>
            </ul>
        </nav>
    </header>

    <!--==================== FILTROS ====================-->
    <div class="container-filtro">
        <div class="categoria-filtro">
            <div class="container">
                <h2 class="section__titulo"><?php echo $lang['productos_titulo']?></h2>

                <div class="main-filtro">
                    <span class="text-filtro"><button type="button" class="filtro-btn "
                            id="todos"><?php echo $lang['filtro_todos']?></button></span>
                    <span class="text-filtro"><button type="button" class="filtro-btn"
                            id="varitas"><?php echo $lang['filtro_varitas']?></button></span>
                    <span class="text-filtro"><button type="button" class="filtro-btn"
                            id="libros"><?php echo $lang['categoria_3']?></button></span>
                    <span class="text-filtro"><button type="button" class="filtro-btn"
                            id="accesorios"><?php echo $lang['categoria_2']?></button></span>
                    <span class="text-filtro"><button type="button" class="filtro-btn"
                            id="tunicas"><?php echo $lang['filtro_tunicas']?></button></span>
                </div>
            </div>
        </div>
    </div>

    <!--==================== PRODUCTOS ====================-->
    <section class="section" id="product">
        <div class="container flex">

            <div class="product__contenido varitas todos">
                <img src="assets/img/varitas/ronWeasley.png" class="product__img">
                <h3 class="product__titulo">Ron Weasley</h3>
                <span class="product__subtitulo"><?php echo $lang['productos_subtitulo']?></span>
                <span class="product__precio">$59.99</span>
                <button class="btn product__btn">
                    <i class="bx bx-cart-alt product__icon"></i>
                </button>
            </div>

            <div class="product__contenido varitas todos">
                <img src="assets/img/varitas/voldemort.png" class="product__img">
                <h3 class="product__titulo">Voldemort</h3>
                <span class="product__subtitulo"><?php echo $lang['productos_subtitulo']?></span>
                <span class="product__precio">$59.99</span>
                <button class="btn product__btn">
                    <i class="bx bx-cart-alt product__icon"></i>
                </button>
            </div>

            <div class="product__contenido varitas todos">
                <img src="assets/img/varitas/nicolasFlamel.png" class="product__img">
                <h3 class="product__titulo">Nicolas Flamel</h3>
                <span class="product__subtitulo"><?php echo $lang['productos_subtitulo']?></span>
                <span class="product__precio">$59.99</span>
                <button class="btn product__btn">
                    <i class="bx bx-cart-alt product__icon"></i>
                </button>
            </div>

            <div class="product__contenido varitas todos">
                <img src="assets/img/varitas/narcisaMalfoy.png" class="product__img">
                <h3 class="product__titulo">Narcisa Malfoy</h3>
                <span class="product__subtitulo"><?php echo $lang['productos_subtitulo']?></span>
                <span class="product__precio">$59.99</span>
                <button class="btn product__btn">
                    <i class="bx bx-cart-alt product__icon"></i>
                </button>
            </div>

            <div class="product__contenido varitas todos">
                <img src="assets/img/varitas/harryPotter.png" class="product__img">
                <h3 class="product__titulo">Harry Potter</h3>
                <span class="product__subtitulo"><?php echo $lang['productos_subtitulo']?></span>
                <span class="product__precio">$59.99</span>
                <button class="btn product__btn">
                    <i class="bx bx-cart-alt product__icon"></i>
                </button>
            </div>

            <div class="product__contenido varitas todos">
                <img src="assets/img/varitas/sauco.png" class="product__img">
                <h3 class="product__titulo">Sauco</h3>
                <span class="product__subtitulo"><?php echo $lang['productos_subtitulo']?></span>
                <span class="product__precio">$59.99</span>
                <button class="btn product__btn">
                    <i class="bx bx-cart-alt product__icon"></i>
                </button>
            </div>

            <div class="product__contenido accesorios todos">
                <img src="assets/img/funkos/funkoDumbledore.png" class="product__img">
                <h3 class="product__titulo">Dumbledore</h3>
                <span class="product__subtitulo"><?php echo $lang['productos_subtitulo']?></span>
                <span class="product__precio">$29.99</span>
                <button class="btn product__btn">
                    <i class="bx bx-cart-alt product__icon"></i>
                </button>
            </div>

            <div class="product__contenido accesorios todos">
                <img src="assets/img/funkos/funkoEspectroPatronus.png" class="product__img">
                <h3 class="product__titulo">Espectro Patronus</h3>
                <span class="product__subtitulo"><?php echo $lang['productos_subtitulo']?></span>
                <span class="product__precio">$29.99</span>
                <button class="btn product__btn">
                    <i class="bx bx-cart-alt product__icon"></i>
                </button>
            </div>

            <div class="product__contenido accesorios todos">
                <img src="assets/img/funkos/funkoHarryPotter.png" class="product__img">
                <h3 class="product__titulo">Harry Potter</h3>
                <span class="product__subtitulo"><?php echo $lang['productos_subtitulo']?></span>
                <span class="product__precio">$29.99</span>
                <button class="btn product__btn">
                    <i class="bx bx-cart-alt product__icon"></i>
                </button>
            </div>

            <div class="product__contenido libros todos">
                <img src="assets/img/libros/elMisterioDelPrincipe.png" class="product__img">
                <h3 class="product__titulo">El Misterio Del Principe</h3>
                <span class="product__subtitulo"><?php echo $lang['productos_subtitulo']?></span>
                <span class="product__precio">$39.99</span>
                <button class="btn product__btn">
                    <i class="bx bx-cart-alt product__icon"></i>
                </button>
            </div>

            <div class="product__contenido libros todos">
                <img src="assets/img/libros/laOrdenDelFenix.png" class="product__img">
                <h3 class="product__titulo">La Orden Del Fenix</h3>
                <span class="product__subtitulo"><?php echo $lang['productos_subtitulo']?></span>
                <span class="product__precio">$39.99</span>
                <button class="btn product__btn">
                    <i class="bx bx-cart-alt product__icon"></i>
                </button>
            </div>

            <div class="product__contenido libros todos">
                <img src="assets/img/libros/sagaCompleta.png" class="product__img">
                <h3 class="product__titulo">Saga Completa de Libros</h3>
                <span class="product__subtitulo"><?php echo $lang['productos_subtitulo']?></span>
                <span class="product__precio">$39.99</span>
                <button class="btn product__btn">
                    <i class="bx bx-cart-alt product__icon"></i>
                </button>
            </div>

            <div class="product__contenido tunicas todos">
                <img src="assets/img/tunicas/tunicaGryffindor.png" class="product__img">
                <h3 class="product__titulo">Tunica Gryffindor</h3>
                <span class="product__subtitulo"><?php echo $lang['productos_subtitulo']?></span>
                <span class="product__precio">$14.99</span>
                <button class="btn product__btn">
                    <i class="bx bx-cart-alt product__icon"></i>
                </button>
            </div>

            <div class="product__contenido tunicas todos">
                <img src="assets/img/tunicas/tunicaRavenclaw.png" class="product__img">
                <h3 class="product__titulo">Tunica Ravenclaw</h3>
                <span class="product__subtitulo"><?php echo $lang['productos_subtitulo']?></span>
                <span class="product__precio">$14.99</span>
                <button class="btn product__btn">
                    <i class="bx bx-cart-alt product__icon"></i>
                </button>
            </div>

            <div class="product__contenido tunicas todos">
                <img src="assets/img/tunicas/tunicaSlytherin.png" class="product__img">
                <h3 class="product__titulo">Tunica Slytherin</h3>
                <span class="product__subtitulo"><?php echo $lang['productos_subtitulo']?></span>
                <span class="product__precio">$14.99</span>
                <button class="btn product__btn">
                    <i class="bx bx-cart-alt product__icon"></i>
                </button>
            </div>
        </div>
    </section>

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
                    <li>
                        <a href="#aboutUs" class="footer__link"><?php echo $lang['header_nosotros']?></a>
                    </li>
                    <li>
                        <a href="#casas" class="footer__link"><?php echo $lang['footer_link_2']?> Hogwarts</a>
                    </li>
                    <li>
                        <a href="#nuevo" class="footer__link"><?php echo $lang['nuevo_titulo']?></a>
                    </li>
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

        <span class="footer__copy">&#169; Lucas De Palma y Lukas Otero.
            <?php echo $lang['footer_copy']?>.</span>

        <img src="assets/img/personajes/dumbledore.png" class="footer__dumbledore">
        <img src="assets/img/personajes/voldemort.png" class="footer__voldemort">
    </footer>

    <!--=============== LOCAL JS ===============-->
    <script src="assets/js/index.js"></script>
    <script src="assets/js/filtro.js"></script>

    <!--=============== GLOBAL JS ===============-->
    <script src="assets/js/btnLang.js"></script>
</body>

</html>