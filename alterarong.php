<?php
session_start();
include("./php/conexao.php");
include("./php/protectong.php");
$id_ong = filter_input(INPUT_GET, 'id_ong', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "SELECT * FROM ong WHERE id_ong = '$id_ong'";
$resultado_usuario = mysqli_query($mysqli, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);
?>
<!DOCTYPE html>
<html lang="pt-br">
<link rel="icon" type="img" href="./img/LOGO.png" />
	<head>
		<meta charset="utf-8">
		<title>Meu Perfil - Editar Dados</title>
		<link rel="stylesheet" href="css/alterarong.css">		
    <link rel="stylesheet" href="css/styles.css"> 

        <!--========== HEADER ==========-->
        <header class="l-header" id="header">
            <nav class="nav bd-container">
                <a href="index.html" class="nav__logo">Meraki</a>
                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="inicialong.php" class="nav__link active-link">Home</a></li>
                        <li class="nav__item"><a href="perfilong.php" class="nav__link">Meu perfil</a></li>


                        <li><i class='bx bx-toggle-left change-theme' id="theme-button"></i></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-grid-alt'></i>
                </div>
            </nav>
        </header>
	</head>
	<body>
		<?php
		?>

		<br><br><br><form method="POST" action="./php/alterandoong.php">
			<input type="hidden" name="id_ong" value="<?php echo $row_usuario['id_ong']; ?>">
			<div class="wrapper">
    <div class="title">
      Editar usuario
    </div>
    <div class="form">
       <div class="inputfield">
			<div class="form">
       <div class="inputfield">
          <label>Nome Fantasia: </label>
          <input type="text" class="input"name="nomefantasia_ong" placeholder="Digite o novo nome fantasia" value="<?php echo $row_usuario['nomefantasia_ong']; ?>">
       </div>  

            <div class="inputfield">
          <label>Nome Juridico: </label>
          <input type="text" class="input"name="nomejuridico_ong" placeholder="Digite o novo nome juridico" value="<?php echo $row_usuario['nomejuridico_ong']; ?>">
       </div>
			
			<div class="inputfield">
          <label>E-mail: </label>
          <input type="email" class="input" name="email_ong" placeholder="Digite o novo E-mail" value="<?php echo $row_usuario['email_ong']; ?>">
       </div> 
			
			<div class="inputfield">
          <label>Telefone: </label>
          <input type="number" class="input" name="telefone_ong" placeholder="Digite o novo telefone" value="<?php echo $row_usuario['telefone_ong']; ?>">
       </div>

            <div class="inputfield">
          <label>CEP: </label>
          <input type="number" class="input" name="cep_ong" placeholder="Digite o novo CEP" value="<?php echo $row_usuario['cep_ong']; ?>">
       </div> 

             <div class="inputfield">
          <label>CNPJ: </label>
          <input type="number" class="input" name="cnpj_ong" placeholder="Digite o novo CNPJ" value="<?php echo $row_usuario['cnpj_ong']; ?>">
       </div> 

           <div class="inputfield">
          <label>Descrição: </label>
          <input type="text" class="input" name="desc_ong" placeholder="Digite a nova descrição" value="<?php echo $row_usuario['desc_ong']; ?>">
       </div>

			<div class="inputfield">
        <input type="submit" value="Editar" class="btn">
      </div>
		
		</form>
		</div>
</div>	
	
</body>
</html>