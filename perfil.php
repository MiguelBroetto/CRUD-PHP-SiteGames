<?php

    include 'funcoes.php';

    // protege a página: só entra se estiver logado
    if (!isset($_SESSION['logado']) || $_SESSION['logado'] != 1) {
        header("Location: entrar.php");
        exit;
    }

    echo criarTopo($SITE." - Perfil");

    $mensagemAcerto = $_GET['mensagemAcerto'] ?? "";
    if ($mensagemAcerto != "") {
        echo criarMsgAcerto($mensagemAcerto);
    }

    echo '<main><h1>Bem-vindo, '.$_SESSION['email'].'</h1></main>';

    echo criarRodape();
?>