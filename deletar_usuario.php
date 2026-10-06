<?php

include 'funcoes.php';
include 'bdcom.php';

echo criarTopo($SITE);


$id = $_GET["id"];

$sql = "DELETE FROM usuarios WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    echo "usuário com ID = ".$id." deletado com sucesso!";
} else {
    echo "Erro ao excluir usuário!: " . mysqli_connect_error($conn);
}

mysqli_close($conn);
?>

<?php
    echo criarRodape();
?>