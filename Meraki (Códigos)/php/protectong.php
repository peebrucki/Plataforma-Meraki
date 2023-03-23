<?php

if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['id_ong'])) {
    die("Você não pode acessar esta página porque não está logado.<p><a href=\"loginong.html\">Entrar</a></p>");
}


?>