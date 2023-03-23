<?php 
session_start();
include ('./php/protectadm.php');
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

        <title>Pagina Inicial ADM</title>
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
                        <li class="nav__item"><a href="#home" class="nav__link active-link">Home</a></li>
                        <li class="nav__item"><a href="#decoration" class="nav__link">Acessar Dados</a></li>

                        <li><i class='bx bx-toggle-left change-theme' id="theme-button"></i></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-grid-alt'></i>
                </div>
            </nav>
        </header>

        <main class="l-main">
            <!--========== HOME ==========-->
            <section class="home" id="home">
                <div class="home__container bd-container bd-grid">
                    <div class="home__img">
                        <img src="img/home1.png" alt="">
                    </div>

                    <div class="home__data">
                        <h1 class="home__title">Bem Vindo ADM <?php echo $_SESSION['nome_adm']; ?>!</h1>
                        <p class="home__description">Somo a Plataforma de ONG's Meraki, Procuramos fazer o Bem, Faça Você Também.</p>
                        <a href="perfiladm.php" class="button">Meu perfil</a>
                    </div>   
                </div>
            </section>

            <!--========== DECORATION ==========-->
            <section class="decoration section bd-container" id="decoration">
                <h2 class="section-title">Acessar dados</h2>
                <div class="decoration__container bd-grid">
                    <div class="decoration__data">
                        <img src="img/ma1.png" alt="" class="decoration__img">
                        <h3 class="decoration__title">ONG</h3>
                        <a href="dadosongadm.php" class="button button-link">Acessar</a>
                    </div>

                    <div class="decoration__data">
                        <img src="img/social.png" alt="" class="decoration__img">
                        <h3 class="decoration__title">DOADOR</h3>
                        <a href="dadosdoadoradm.php" class="button button-link">Acessar</a>
                    </div>

                    <div class="decoration__data">
                        <img src="img/animal.png" alt="" class="decoration__img">
                        <h3 class="decoration__title">MENSAGENS</h3>
                        <a href="dadosmensagemadm.php" class="button button-link">Acessar</a>
                    </div>
                </div>
            </section>
        </main>

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
        </footer>169; 2021 Bedimcode. All right reserved</p>
        </footer>

        <!--========== SCROLL REVEAL ==========-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--========== MAIN JS ==========-->
        <script src="js/main.js"></script>
    </body>
</html>