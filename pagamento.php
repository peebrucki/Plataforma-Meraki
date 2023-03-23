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
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pagamento</title>
    <link rel="stylesheet" href="css/pagamento.css" />
    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
  </head>
  <body>
    <div class="container">
      <div class="left column">
        <div class="logo"><ion-icon name="finger-print"></ion-icon></div>
        <div class="header"><h1 class="ml12">pagamento</h1></div>
        <div class="back-btn">⟵ voltar para as opções</div>
        <div class="price">
          <span>Obrigado por nos escolher!</span>
        </div>
      </div>
      <div class="right column">
        <div class="nav">
          <div><a href="<?php echo "perfilpublico.php?id_ong=" . $row_usuario['id_ong']; ?>" class="nav-item">ONG</a></div>
          ➝
          <div><a href="<?php echo "opcoes.php?id_ong=" . $row_usuario['id_ong']; ?>" class="nav-item">Opções</a></div>
          ➝
          <div class="nav-item active">pagamento</div>
        </div>
        <div class="card-img">
          <img src="img/card.png" alt="" />
        </div>

        
        <form method="POST" action="./php/doacao.php">
        <div class="form">
          <div class="form-row">
            <input type="number" placeholder="Numero do cartão" name="numerocartao_doacao" />
             &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
             <input type="number" placeholder="cvv" name="cvv_doacao"/>
          </div>
          <div class="form-row">
            <input type="date" placeholder="validade" name="validade_doacao"/>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="number" placeholder="valor" name="valor_doacao"/>
          </div>
        </div>
        <div class="btn">
          <button type="submit">pagar</button>
        </div>
      </div>
      </form>
    </div>
    <script>
      var textWrapper = document.querySelector(".ml12");
      textWrapper.innerHTML = textWrapper.textContent.replace(
        /\S/g,
        "<span class='letter'>$&</span>"
      );

      anime.timeline().add({
        targets: ".ml12 .letter",
        translateY: [100, 0],
        translateZ: 0,
        opacity: [0, 1],
        easing: "easeOutExpo",
        duration: 2000,
        delay: (el, i) => 1200 + 60 * i,
      });

      TweenMax.from(".logo", 3, {
        y: "40",
        opacity: 0,
        ease: Expo.easeInOut,
      });

      TweenMax.from(".back-btn", 3, {
        y: "40",
        opacity: 0,
        ease: Expo.easeInOut,
        delay: 0.4,
      });

      TweenMax.from(".right", 3, {
        y: "40",
        opacity: 0,
        ease: Expo.easeInOut,
        delay: 0.6,
      });

      TweenMax.from(".card-img", 2, {
        y: "60",
        opacity: 0,
        ease: Expo.easeInOut,
        delay: 1.2,
      });

      TweenMax.from(".btn", 2, {
        y: "60",
        opacity: 0,
        ease: Expo.easeInOut,
        delay: 1.4,
      });

      TweenMax.staggerFrom(
        ".price > span",
        1,
        {
          y: "40",
          opacity: 0,
          ease: Power2.easeOut,
          delay: 1.6,
        },
        0.2
      );

      TweenMax.staggerFrom(
        ".nav > .nav-item",
        1,
        {
          y: "40",
          opacity: 0,
          ease: Power2.easeOut,
          delay: 1.6,
        },
        0.2
      );

      TweenMax.staggerFrom(
        ".form > div",
        1,
        {
          y: "40",
          opacity: 0,
          ease: Power2.easeOut,
          delay: 2,
        },
        0.2
      );
    </script>
  </body>
</html>