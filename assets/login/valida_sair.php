<?php
session_start();
ob_start();
unset($_SESSION['id'], $_SESSION['nome']);
$_SESSION['msg'] = '<span style="color:darkgreen;">Deslogado com sucesso!</span>';

header("Location: ../../index.php");