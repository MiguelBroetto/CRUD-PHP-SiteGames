<?php

    $servername = "localhost";
    $username = "root"; // Seu usuário.
    $password = ""; // sua senha
    $bdname = "projeto_Postagens_2026";

    $conn = mysqli_connect($servername, $username, $password, $bdname);

    if(!$conn) {
        die("Falha na conexão: " . mysqli_connect_error());
    } else {
        echo "conectou";
    }

?>