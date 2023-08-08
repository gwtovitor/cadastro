<?php
    include_once("../Model/userModel.php");

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $dataNascimento = $_POST["data-nascimento"];
    $sexo = $_POST["sexo"];
    $senha = $_POST["senha"];

    $user = new Usuario($nome, $email, $telefone, $dataNascimento, $sexo, $senha);
    $user->createUser();
?>