<?php
$username = 'root';
$password = '';

try{
    $pdo = new PDO('mysql:host=localhost;dbname=asmestoque', $username, $password);
} catch(PDOException $e) {
    echo 'Error: '. $e->getMessage();
}


?>