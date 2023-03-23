<?php
session_start();
include("./php/conexao.php");
include("./php/protectong.php");
$nomefantasia_ong = filter_input(INPUT_GET, 'nomefantasia_ong', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "SELECT * FROM mensagem WHERE nomefantasia_ong = '$nomefantasia_ong'";
$resultado_usuario = mysqli_query($mysqli, $result_usuario);
$_SESSION = mysqli_fetch_assoc($resultado_usuario);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>

	 <link rel="stylesheet" href="css/styles.css">  <header class="l-header" id="header">
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
		<link rel="icon" type="img" href="./img/LOGO.png" />
		<meta charset="utf-8">
		<title>Resposta</title>
		<link rel="stylesheet" href="css/alterarong.css">		
	</head>
	<body>
		<?php
		$pagina_atual = filter_input(INPUT_GET,'pagina', FILTER_SANITIZE_NUMBER_INT);		
		$pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;
		
		$qnt_result_pg = 1;
	
		$inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;
		
		$result_usuarios = "SELECT * FROM mensagem LIMIT $inicio, $qnt_result_pg";
		$resultado_usuarios = mysqli_query($mysqli, $result_usuarios);
		while($_SESSION = mysqli_fetch_assoc($resultado_usuarios))
		{
		?>
		<br><br><br><form method="POST" action="">
			<input type="hidden" name="nomefantasia_ong" disabled="" value="<?php echo $_SESSION['nomefantasia_ong']; ?>">
			
			<div class="wrapper">
    <div class="title">
      Resposta
    </div>
    <div class="form">
       <div class="inputfield">
			<div class="form">

			<div class="inputfield">
			<label>Mensagem: </label>
			<input type="text" class="input" name="mensagem_ong" placeholder="Ainda não há uma mensagem" disabled="" value="<?php echo $_SESSION['mensagem_ong']; ?>">
      </div>

			<div class="inputfield">
			<label>Resposta: </label>
			<input type="text" class="input" name="resposta" placeholder="Ainda não há resposta" disabled="" value="<?php echo $_SESSION['resposta']; ?>">
      </div>
			<div class="inputfield">
			 <?php
         echo "<a href='perfilong.php'>Voltar</a><br><hr>";
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
		$result_pg = "SELECT COUNT(nomefantasia_ong) AS num_result FROM mensagem";
		$resultado_pg = mysqli_query($mysqli, $result_pg);
		$row_pg = mysqli_fetch_assoc($resultado_pg);
		//echo $row_pg['num_result'];
		//Quantidade de pagina 
		$quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);
		
		//Limitar os link antes depois
		$max_links = 2;
		echo "<a href='respostaong.php?pagina=1'>Primeira</a> ";
		
		for($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++){
			if($pag_ant >= 1){
				echo "<a href='respostaong.php?pagina=$pag_ant'>$pag_ant</a> ";
			}
		}
			
		echo "$pagina ";
		
		for($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++){
			if($pag_dep <= $quantidade_pg){
				echo "<a href='respostaong.php?pagina=$pag_dep'>$pag_dep</a> ";
			}
		}
		
		echo "<a href='respostaong.php?pagina=$quantidade_pg'>Ultima</a>";
?>	