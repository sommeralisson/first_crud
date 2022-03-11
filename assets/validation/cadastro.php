<?php
require 'config.php';

$login = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_SPECIAL_CHARS);
$pass = $_POST['pass'];

if($login && $pass) {

    $sql = $pdo->prepare("SELECT * FROM usuarios WHERE login = :login");
    $sql->bindValue(':login', $login);
    $sql->execute();


    if($sql->rowCount() === 0) {
        $sql = $pdo->prepare("INSERT INTO usuarios (login, password) VALUES (:login, :password)");
        $sql->bindValue(':login', $login);
        $sql->bindValue(':password', $pass);
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