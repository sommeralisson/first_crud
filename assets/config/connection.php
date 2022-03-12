<?php

$dbname = "asmestoque";
$host = "localhost";
$user = "root";
$pass = "";

try {
    $pdo = new PDO("mysql:dbname=".$dbname.";host=".$host, $user, $pass);

} catch (PDOException $e) {
    return $e->getMessage($e);
}

?>