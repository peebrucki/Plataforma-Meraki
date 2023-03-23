<?php 
session_start();
include ('./php/protectong.php');
?>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="img" href="./img/LOGO.png" />

        <!--========== BOX ICONS ==========-->
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

        <!--========== CSS ==========-->
        <link rel="stylesheet" href="css/styles.css">

        <title>Pagina Inicial ONG</title>
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
                        <li class="nav__item"><a href="perfilong.php" class="nav__link active-link">Meu Perfil</a></li>
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
            <!--========== HOME ==========-->
            <section class="home" id="home">
                <div class="home__container bd-container bd-grid">
                    <div class="home__img">
                        <img src="img/home1.png" alt="">
                    </div>

                    <div class="home__data">
                        <h1 class="home__title">Bem Vinda ONG <?php echo $_SESSION['nomefantasia_ong']; ?>!</h1>
                        <p class="home__description">Somo a Plataforma de ONG's Meraki, Procuramos fazer o Bem, Faça Você Também.</p>
                        <a href="perfilong.php" class="button">Meu perfil</a>
                    </div>   
                </div>
            </section>

            <!--========== SEND GIFT ==========-->
            <section class="send section" id="contato">
                <div class="send__container bd-container bd-grid">
                    <div class="send__content">
                        <h2 class="section-title-center send__title">Entre em contato</h2>
                        <p class="send__description">Se você tem alguma duvida ou teve algum problema, fale conosco.</p>
                        <form action="./php/contatoong.php" method="POST">
                            <div class="send__direction">
                                <input type="text" placeholder="Escreva aqui" class="send__input" name="mensagem_ong">
                                <button type="submit" class="button">Enviar</button>
                            </div>
                        </form>
                    </div>

                    <div class="send__img">
                        <img src="img/contato.png" alt="">
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