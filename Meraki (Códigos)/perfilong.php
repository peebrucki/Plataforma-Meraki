  <?php 
    session_start();
    include ('./php/protectong.php');
    include ('./php/conexao.php');   
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

        <title>Meu Perfil</title>
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

                    <div class="home__data">
                         <h2 class="section-title-center">Dados <br> ONG</h2>
                         <h3>Para ver seus dados atualizados será necessário fazer logout e se logar novamente!<br></h3><br>
                        <p class="share__description">
                            <?php
                              echo "Nome Fantasia: " . $_SESSION['nomefantasia_ong'] . "<br>";
                              echo "Nome Juridico: " . $_SESSION['nomejuridico_ong'] . "<br>";
                              echo "E-mail: " . $_SESSION['email_ong'] . "<br>";
                              echo "Telefone: " . $_SESSION['telefone_ong'] . "<br>";
                              echo "CEP: " . $_SESSION['cep_ong'] . "<br>";
                              echo "CNPJ: " . $_SESSION['cnpj_ong'] . "<br>";
                               echo "Descrição: " . $_SESSION['desc_ong'] . "<br>";
                              echo "<a href='alterarong.php?id_ong=" . $_SESSION['id_ong'] . "'>Editar</a><br><hr>";
                            ?>
                        </p>
 
                        <a href="./php/logout.php" class="button">LogOut</a> 
                        </p>
                        </p>
                    </form>                       
                    </div>   
                </div>

                  <div class="home__container bd-container bd-grid">

                    <div class="home__data">
                         <h3>Deseja ver se já recebeu alguma resposta das suas mensagens enviadas?<br></h3><br>
                        <?php
                          echo "<a href='respostaong.php?nomefantasia_ong=" . $_SESSION['nomefantasia_ong'] . "'>Resposta</a><br><hr>";
                          ?>                       
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