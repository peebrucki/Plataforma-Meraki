<?php
session_start();
include("./php/conexao.php");
include("./php/protectdoador.php");
$id_doador = filter_input(INPUT_GET, 'id_doador', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "SELECT * FROM doador WHERE id_doador = '$id_doador'";
$resultado_usuario = mysqli_query($mysqli, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);
?>
<!DOCTYPE html>
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
                        <li class="nav__item"><a href="inicialdoador.php" class="nav__link active-link">Home</a></li>
                        <li class="nav__item"><a href="perfildoador.php" class="nav__link">Meu perfil</a></li>


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
		<br><br><br><form method="POST" action="./php/alterandodoador.php">
			<input type="hidden" name="id_doador" value="<?php echo $row_usuario['id_doador']; ?>">
			
			<div class="wrapper">
    <div class="title">
      Editar usuario
    </div>
    <div class="form">
       <div class="inputfield">
			<div class="form">
       <div class="inputfield">
			<label>Nome: </label>
			<input type="text" class="input" name="nome_doador" placeholder="Digite o novo nome" value="<?php echo $row_usuario['nome_doador']; ?>">
			</div>
			
			<div class="inputfield">
			<label>E-mail: </label>
			<input type="email" class="input" name="email_doador" placeholder="Digite o novo E-mail" value="<?php echo $row_usuario['email_doador']; ?>">
			</div>

			<div class="inputfield">
			<label>Telefone: </label>
			<input type="text" class="input" name="telefone_doador" placeholder="Digite o novo telefone" value="<?php echo $row_usuario['telefone_doador']; ?>">
      </div>

			<div class="inputfield">
			<label>CEP: </label>
			<input type="text" class="input" name="cep_doador" placeholder="Digite o novo CEP" value="<?php echo $row_usuario['cep_doador']; ?>">
      </div>

			<div class="inputfield">
			<label>CPF: </label>
			<input type="text" class="input" name="cpf_doador" placeholder="Digite o novo CPF" value="<?php echo $row_usuario['cpf_doador']; ?>">
			</div>
			
			<div class="inputfield">
			<input type="submit" value="Editar" class="btn">
		</div>
		</form>
	</div>
</div>
	</body>
</html>