<?php
    require 'bdcom.php';

    $email = $_POST['email'];//"doido@gmail.com";
    $senha = $_POST['senha'];//"seila";

    $sql = "INSERT INTO usuarios (email, senha)
    VALUES ('$email', '$senha')";

    if (mysqli_query($conn, $sql)) {
        echo " usuário cadastrado com sucesso!";
    } else {
        echo " Erro ao cadastrar usuário: " . mysqli_error($conn);
    }
    mysqli_close($conn);
?>