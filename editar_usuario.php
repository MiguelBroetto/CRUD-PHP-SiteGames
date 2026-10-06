<?php

include 'bdcom.php';

$id =$_POST["id"];
$nome =$_POST["nome"];
$email =$_POST["email"];

$sql = "UPDATE usuarios SET nome = '$nome', email = '$email' WHERE id = $id";

if (mysqli_query($conn, $sql)) {
    echo "usuário atualizado com sucesso!";
} else {
    echo "Erro ao atulizar usuário: " . mysqli_error($conn);
}

mysqli_close($conn);

?>