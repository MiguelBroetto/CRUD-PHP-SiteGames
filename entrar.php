<?php

    include 'funcoes.php';

    $mensagemErro = $_GET['mensagemErro'] ?? "";

    if ($mensagemErro != "") {
        echo criarMsgErro($mensagemErro);
    }

    echo criarTopo($SITE." - Entrar");
    echo criarForm();
    echo criarRodape();
?>