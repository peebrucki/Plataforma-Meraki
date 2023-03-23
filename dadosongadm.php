<?php
session_start();
include("./php/conexao.php");
include("./php/protectadm.php");
?>
<html lang="pt-br">
	<head>
		<header class="l-header" id="header">
			<link rel="stylesheet" href="css/styles.css"> 
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
		<link rel="icon" type="img" href="./img/LOGO.png" />
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/alterarong.css">	
      <title>Listar ONG's</title>
	</head>
	<body>
		<?php
		
		$pagina_atual = filter_input(INPUT_GET,'pagina', FILTER_SANITIZE_NUMBER_INT);		
		$pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;
		
		$qnt_result_pg = 1;
	
		$inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;
		
		$result_usuarios = "SELECT * FROM ong LIMIT $inicio, $qnt_result_pg";
		$resultado_usuarios = mysqli_query($mysqli, $result_usuarios);
		while($row_usuario = mysqli_fetch_assoc($resultado_usuarios))
		{
			?>
		
		<br><br><br><form method="POST" action="admalterandoong.php">
			<input type="hidden" name="id_ong" value="<?php echo $row_usuario['id_ong']; ?>">
			<div class="wrapper">
    <div class="title">
      Lista ong's
    </div>
    <div class="form">
       <div class="inputfield">
			<div class="form">

            <div class="inputfield">
			<label>Nome Fantasia: </label>
			<input type="text" class="input" name="nomefantasia_ong" placeholder="Digite o novo nome" disabled="" value="<?php echo $row_usuario['nomefantasia_ong']; ?>">
			</div>

			<div class="inputfield">
			<label>Nome Juridico: </label>
			<input type="text" class="input" name="nomejuridico_ong" placeholder="Digite o novo nome" disabled="" value="<?php echo $row_usuario['nomejuridico_ong']; ?>">
			</div>
			
			<div class="inputfield">
			<label>E-mail: </label>
			<input type="email" class="input" name="email_ong" placeholder="Digite o novo E-mail" disabled="" value="<?php echo $row_usuario['email_ong']; ?>">
			</div>

			<div class="inputfield">
			<label>Telefone: </label>
			<input type="text" class="input" name="telefone_ong" placeholder="Digite o novo telefone" disabled="" value="<?php echo $row_usuario['telefone_ong']; ?>">
      </div>

			<div class="inputfield">
			<label>CEP: </label>
			<input type="text" class="input" name="cep_ong" placeholder="Digite o novo CEP" disabled="" value="<?php echo $row_usuario['cep_ong']; ?>">
      </div>

			<div class="inputfield">
			<label>CNPJ: </label>
			<input type="text" class="input" name="cnpj_ong" placeholder="Digite o novo cnpj" disabled="" value="<?php echo $row_usuario['cnpj_ong']; ?>">
			</div>
			
			<div class="inputfield">
			<?php
            echo "<a href='admalterandoong.php?id_ong=" . $row_usuario['id_ong'] . "'>Editar</a><br><hr>";
			?>
		</div>
		</form>
	</div>
</div>
	</body>
</html>

			<?php
		}
		
		//Paginção - Somar a quantidade de usuários
		$result_pg = "SELECT COUNT(id_ong) AS num_result FROM ong";
		$resultado_pg = mysqli_query($mysqli, $result_pg);
		$row_pg = mysqli_fetch_assoc($resultado_pg);
		//echo $row_pg['num_result'];
		//Quantidade de pagina 
		$quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);
		
		//Limitar os link antes depois
		$max_links = 2;
		echo "<a href='dadosongadm.php?pagina=1'>Primeira</a> ";
		
		for($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++){
			if($pag_ant >= 1){
				echo "<a href='dadosongadm.php?pagina=$pag_ant'>$pag_ant</a> ";
			}
		}
			
		echo "$pagina ";
		
		for($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++){
			if($pag_dep <= $quantidade_pg){
				echo "<a href='dadosongadm.php?pagina=$pag_dep'>$pag_dep</a> ";
			}
		}
		
		echo "<a href='dadosongadm.php?pagina=$quantidade_pg'>Ultima</a>";
		
		?>		
	</body>
</html>