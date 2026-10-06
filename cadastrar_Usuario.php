<?php
session_start();
require("funcoes.php");
$logado = @$_SESSION["logado"];

echo criarTopo($SITE . "- Cadastro");
echo criaFormularioCadastroUsuario();
echo criarRodape();
?>