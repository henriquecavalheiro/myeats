<?php

require_once "../Model/user_model.php";

    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $conf_senha = $_POST['conf_senha'];


    $userModel = new UserModel();
    $userModel -> create($nome, $endereco, $email, $senha);

 




?>