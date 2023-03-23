<?php
session_start();
include("./php/conexao.php");
include("./php/protectdoador.php");
$id_ong = filter_input(INPUT_GET, 'id_ong', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "SELECT * FROM ong WHERE id_ong = '$id_ong'";
$resultado_usuario = mysqli_query($mysqli, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);
?>
    <html lang="en">
    <head>
        <link rel="icon" type="img" href="./img/LOGO.png" />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--========== BOX ICONS ==========-->
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

        <!--========== CSS ==========-->
        <link rel="stylesheet" href="css/styles.css">

        <title>Opções</title>
    </head>
    <body>
        <!--========== SCROLL TOP ==========-->
        <a href="#" class="scrolltop" id="scroll-top">
            <i class='bx bx-up-arrow-alt scrolltop__icon'></i>
        </a>
        
        <!--========== HEADER ==========-->
        <header class="l-header" id="header">
            <nav class="nav bd-container">
                <a href="#" class="nav__logo">Meraki</a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="inicialong.php" class="nav__link active-link">Home</a></li>
                        <li class="nav__item"><a href="#share" class="nav__link">Sobre</a></li>
                        <li class="nav__item"><a href="#decoration" class="nav__link">Fotos</a></li>
                        <li class="nav__item"><a href="#contato" class="nav__link">Contato</a></li>

                        <li><i class='bx bx-toggle-left change-theme' id="theme-button"></i></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-grid-alt'></i>
                </div>
            </nav>
        </header>

        <main class="l-main">
            <section class="decoration section bd-container" id="decoration">
                <h2 class="section-title">Algumas opções <br> de valores</h2>
                <h5 class="section-title-center1">Pague pelo pix<br><?php echo $row_usuario['cnpj_ong'] . ' (CNPJ)';?></h5>
                <div class="decoration__container bd-grid">
                    <div class="decoration__data">
                        <h3 class="decoration__title">Ou</h3>
                        <img src="img/opcoes1.png" alt="" class="decoration__img">
                         <h3 class="decoration__title"></h3>
                        <a href="<?php echo "pagamento.php?id_ong=" . $row_usuario['id_ong']; ?>" class="button button-link">Pagar no Cartão</a>
                    </div>
                </div>
            </section>

        <!--========== FOOTER ==========-->
      <footer class="footer section">
            <div class="footer__container bd-container bd-grid">

                <div class="footer__content">
                    <h3 class="footer__title">Acesso rápido</h3>
                    <ul>
                        <li><a href="#home" class="footer__link">Login</a></li>
                        <li><a href="#share" class="footer__link">Sobre Nós</a></li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Redes Sociais</h3>
                    <a href="#" class="footer__social"><i class='bx bxl-facebook-circle '></i></a>
                    <a href="#" class="footer__social"><i class='bx bxl-twitter'></i></a>
                    <a href="#" class="footer__social"><i class='bx bxl-instagram-alt'></i></a>
                </div>
            </div>

            <p class="footer__copy">&#169; 2021 Bedimcode. All right reserved</p>
        </footer>

        <!--========== SCROLL REVEAL ==========-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--========== MAIN JS ==========-->
        <script src="js/main.js"></script>
    </body>
</html>