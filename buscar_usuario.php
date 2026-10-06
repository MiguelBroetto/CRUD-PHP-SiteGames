<?php

require ('bdcom.php');

$id = $_GET['id'];
$usuario = buscarUsuario($id, $conn);

if ($usuario != "") {
    echo "Achei usuário ". $usuario["id"] . " com email " . $usuario ["email"];
}
?>