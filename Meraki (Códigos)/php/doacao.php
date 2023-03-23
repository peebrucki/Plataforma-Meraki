<?php 
    session_start();
    include("conexao.php");
    

if(isset($_POST['numerocartao_doacao'])) 
{
//VERIFICA CAMPO PREENCHIDO
    if(strlen($_POST['numerocartao_doacao']) == 0) 
    {
        echo "<script>alert('Por Favor Preencha Todos os Campos para Efetuar o Pagamento!');location.href=\"../pagamento.php\";</script>";
    } 
    else if(strlen($_POST['cvv_doacao']) == 0) 
    {
        echo "<script>alert('Por Favor Preencha Todos os Campos para Efetuar o Pagamento!');location.href=\"../pagamento.php\";</script>";
    }
    else if(strlen($_POST['validade_doacao']) == 0) 
    {
        echo "<script>alert('Por Favor Preencha Todos os Campos para Efetuar o Pagamento!');location.href=\"../pagamento.php\";</script>";
    } 
    else if(strlen($_POST['valor_doacao']) == 0) 
    {
        echo "<script>alert('Por Favor Preencha Todos os Campos para Efetuar o Pagamento!');location.href=\"../pagamento.php\";</script>";
    }  
    //FIM VERIFICA CAMPO PREENCHIDO
    else 
    {
      $numerocartao_doacao = $_POST['numerocartao_doacao'];
      $cvv_doacao = $_POST['cvv_doacao'];
      $validade_doacao = $_POST['validade_doacao'];
      $valor_doacao = $_POST['valor_doacao'];

                if (isset($_POST['numerocartao_doacao']))
                {

                $nome_doador = $_SESSION['nome_doador'];
                $email_doador = $_SESSION['email_doador'];
                $telefone_doador = $_SESSION['telefone_doador']; 
                $cep_doador = $_SESSION['cep_doador'];
                $cpf_doador = $_SESSION['cpf_doador'];

                 $result_usuario = "INSERT INTO doacao (numerocartao_doacao, cvv_doacao, validade_doacao, valor_doacao, nome_doador, email_doador, telefone_doador, cep_doador, cpf_doador) VALUES ('$numerocartao_doacao', '$cvv_doacao', '$validade_doacao', '$valor_doacao', '$nome_doador', '$email_doador', '$telefone_doador', '$cep_doador', '$cpf_doador')";
                 $resultado_usuario = mysqli_query($mysqli, $result_usuario);
    
                         if(mysqli_affected_rows($mysqli) != 0)
                         {
                         echo "<script> alert('O Pagamento foi Efetuado com Sucesso');location.href=\"../inicialdoador.php\";</script>";  
                         }
                         else
                         {
                         echo "<script>alert('ERRO: A Mensagem NÃO Foi Enviada Com Sucesso!');</script>";    
                         }
                }
                else 
                {
                echo "<script> alert('ERRO');location.href=\"../inicialdoador.php\";</script>";
                } 
                  
    }   
        
} 
?>