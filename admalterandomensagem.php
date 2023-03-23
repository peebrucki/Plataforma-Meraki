<?php
session_start();
include("./php/conexao.php");
include("./php/protectadm.php");
$id_mensagem = filter_input(INPUT_GET, 'id_mensagem', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "SELECT * FROM mensagem WHERE id_mensagem = '$id_mensagem'";
$resultado_usuario = mysqli_query($mysqli, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);
?>

<html lang="pt-br">
<link rel="icon" type="img" href="./img/LOGO.png" />
	<head>
		 <link rel="stylesheet" href="css/styles.css"> 

        <!--========== HEADER ==========-->
        <header class="l-header" id="header">
            <nav class="nav bd-container">
                <a href="index.html" class="nav__logo">Meraki</a>
                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="inicialadm.php" class="nav__link active-link">Home</a></li>
                        <li class="nav__item"><a href="perfiladm.php" class="nav__link">Meu perfil</a></li>


                        <li><i class='bx bx-toggle-left change-theme' id="theme-button"></i></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-grid-alt'></i>
                </div>
            </nav>
        </header>
		<link rel="stylesheet" href="css/alterarong.css">	
		<meta charset="utf-8">
		<title>Responder Mensagem</title>		
	</head>
	<body>

		<br><br><br><form method="POST" action="./php/alterandomensagemadm.php">
			<input type="hidden" name="id_mensagem" value="<?php echo $row_usuario['id_mensagem']; ?>">
			<div class="wrapper">
    <div class="title">
      Responder Mensagem
    </div>
    <div class="form">
       <div class="inputfield">
			<div class="form">
       <div class="inputfield">
			<label>Mensagem ONG: </label>
			<input type="text" class="input" name="mensagem_ong" placeholder="Digite a nova mensagem" value="<?php echo $row_usuario['mensagem_ong']; ?>">
			</div>
			
			<div class="inputfield">
			<label>Mensagem Doador: </label>
			<input type="text" class="input" name="mensagem_doador" placeholder="Digite a nova Mensagem" value="<?php echo $row_usuario['mensagem_doador']; ?>">
			</div>

			<div class="inputfield">
			<label>Resposta: </label>
			<input type="text" class="input" name="resposta" placeholder="Digite a nova Resposta" value="<?php echo $row_usuario['resposta']; ?>">
			</div>
			
			<div class="inputfield">
			<input type="submit" value="Responder" class="btn">
		</div>
		</form>
	</div>
</div>
	</body>
</html>
