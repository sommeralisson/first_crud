<?php
require '../config/connection.php';

$user = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_STRING);
$pass = filter_input(INPUT_POST, 'pass');
$passHash = password_hash($pass, PASSWORD_DEFAULT);

if($user && $pass) {
    $sql = $pdo->prepare("SELECT * FROM usuarios WHERE nome = :nome");
    $sql->bindValue(":nome", $user);
    $sql->execute();

    if($sql->rowCount() === 0) {
        $sql = $pdo->prepare("INSERT INTO usuarios (nome, senha) VALUES (:nome, :senha)");
        $sql->bindValue(":nome", $user);
        $sql->bindValue(":senha", $passHash);
        $sql->execute();

        header("Location: ../../index.php");
        exit;
    } else {
        header("Location: ../../index.php");
        exit;
    }
} else {
    header("Location: ../../index.php");
    exit;
}

?>