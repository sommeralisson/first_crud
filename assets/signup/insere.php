<?php
require '../config/connection.php';

$user = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_STRING);
$pass = filter_input(INPUT_POST, 'pass');

if($user && $pass) {
    $sql = $pdo->prepare("SELECT * FROM usuarios WHERE login = :login");
    $sql->bindValue(":login", $user);
    $sql->execute();

    if($sql->rowCount() === 0) {
        $sql = $pdo->prepare("INSERT INTO usuarios (login, password) VALUES (:login, :password)");
        $sql->bindValue(":login", $user);
        $sql->bindValue(":password", $pass);
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