<?php

    include 'funcoes.php';
    session_destroy();
    header('Location: index.php');
    exit;
?>