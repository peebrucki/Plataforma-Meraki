<?php

if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['id_doador'])) {
    die("Você não pode acessar esta página porque não está logado.<p><a href=\"logindoador.html\">Entrar</a></p>");
}


?>