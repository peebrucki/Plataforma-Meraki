<?php
session_start();
include("./php/conexao.php");
include("./php/protectadm.php");
$id_adm = filter_input(INPUT_GET, 'id_adm', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "SELECT * FROM adm WHERE id_adm = '$id_adm'";
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
		<meta charset="utf-8">
		<title>Meu Perfil - Editar Dados</title>
		<link rel="stylesheet" href="css/alterarong.css">		
	</head>
	<body>
		<?php
		?>
		<br><br><br><form method="POST" action="./php/alterandoadm.php">
			<input type="hidden" name="id_adm" value="<?php echo $row_usuario['id_adm']; ?>">
			<div class="wrapper">
    <div class="title">
      Editar usuario
    </div>
    <div class="form">
       <div class="inputfield">
			<div class="form">
       <div class="inputfield">
			<label>Nome: </label>
			<input type="text" class="input" name="nome_adm" placeholder="Digite o novo nome" value="<?php echo $row_usuario['nome_adm']; ?>">
			</div>
			
			<div class="inputfield">
			<label>E-mail: </label>
			<input type="email" class="input" name="email_adm" placeholder="Digite o novo E-mail" value="<?php echo $row_usuario['email_adm']; ?>">
			</div>

			<div class="inputfield">
			<label>Telefone: </label>
			<input type="text" class="input" name="telefone_adm" placeholder="Digite o novo telefone" value="<?php echo $row_usuario['telefone_adm']; ?>">
      </div>
			
			<div class="inputfield">
			<input type="submit" value="Editar" class="btn">
		</div>
		</form>
	</div>
</div>
	</body>
</html>