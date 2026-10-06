<?php
    session_start();


    $email = $_POST ['email'];
    $senha = md5($_POST ['senha']);

    if ($email == "broettin@gmail.com" && $senha == md5("gamer")){
        // echo "SENHA CORRETA!";
        $_SESSION['email'] = $email;
        $_SESSION['logado'] = 1;
        header("Location: perfil.php?mensagemAcerto=Acertou usuário e login.");
        
    } else {
        $_SESSION['logado'] = 0;
        header("Location: entrar.php?mensagemErro=Errou a senha ou login.");
    }
    // } else {
        // echo "SENHA INCORRETA!";
    // }
?>