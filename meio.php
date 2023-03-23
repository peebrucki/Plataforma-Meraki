<?php
session_start();
include("./php/conexao.php");
include("./php/protectdoador.php");
?>
    <html lang="en">
    <head>
        <link rel="icon" type="img" href="./img/LOGO.png" />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--========== BOX ICONS ==========-->
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

        <!--========== CSS ==========-->
        <link rel="stylesheet" href="css/meio.css">

        <title>Meio Ambiente</title>
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
                        <li class="nav__item"><a href="inicialdoador.php" class="nav__link active-link">Home</a></li>
                        <li class="nav__item"><a href="perfildoador.php" class="nav__link">Meu Perfil</a></li>

                        <li><i class='bx bx-toggle-left change-theme' id="theme-button"></i></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-grid-alt'></i>
                </div>
            </nav>
        </header>

        <main class="l-main">

            <!--========== ACCESSORIES ==========-->
            <section class="accessory section bd-container" id="accessory">
               <h2 class="section-title">ONG´s do Meio Ambiente <br> </h2>
                <?php
                  $pagina_atual = filter_input(INPUT_GET,'pagina', FILTER_SANITIZE_NUMBER_INT);       
        $pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;
        
        $qnt_result_pg = 2;
    
        $inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;

        $result_usuarios = "SELECT * FROM ong WHERE categoria_ong = 'meioambiente'LIMIT $inicio, $qnt_result_pg";
        $resultado_usuarios = mysqli_query($mysqli, $result_usuarios);
        while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){
            ?>
                    <div class="accessory__content">
                        <div class="accessory__container bd-grid">
                        <img src="img/ma1.png" alt="" class="accessory__img">
                        <h3 class="accessory__title"><?php echo $row_usuario['nomefantasia_ong'];?></h3>
                        <span class="accessory__category"><?php echo $row_usuario['desc_ong'];?></span>
                        <span class="accessory__preci"></span>
                        <a href='<?php echo "perfilpublico.php?id_ong=" . $row_usuario['id_ong']; ?>"' class="button accessory__button"><i class='bx bx-add-to-queue'></i></a>
                    </div>

                </div>
            </section>

        <!--========== FOOTER ==========-->
 <footer class="footer section">
            <div class="footer__container bd-container bd-grid">

                <div class="footer__content">
                     <?php
        }
        //Paginção - Somar a quantidade de usuários
        $result_pg = "SELECT COUNT(id_ong) AS num_result FROM ong WHERE categoria_ong = 'meioambiente'";
        $resultado_pg = mysqli_query($mysqli, $result_pg);
        $row_pg = mysqli_fetch_assoc($resultado_pg);
        //echo $row_pg['num_result'];
        //Quantidade de pagina 
        $quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);
        
        //Limitar os link antes depois
        $max_links = 2;
        echo "<a href='meio.php?pagina=1'>Primeira</a> ";
        
        for($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++){
            if($pag_ant >= 1){
                echo "<a href='meio.php?pagina=$pag_ant'>$pag_ant</a> ";
            }
        }
            
        echo "$pagina ";
        
        for($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++){
            if($pag_dep <= $quantidade_pg){
                echo "<a href='meio.php?pagina=$pag_dep'>$pag_dep</a> ";
            }
        }
        
        echo "<a href='meio.php?pagina=$quantidade_pg'>Ultima</a>";
   
        ?>
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