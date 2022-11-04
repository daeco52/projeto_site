<?php
session_start();

if (!empty($_SESSION['id'])) {
    echo "Olá " . $_SESSION['nome'] . ", Bem-Vindo! <br>";
    echo " <a href='sair.php'>Sair</a>";
} else {

    header("Location: contato.php");
}