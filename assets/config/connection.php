<?php
    $host = "yourhost";
    $dbname = "yourdb";
    $user = "";
    $pass = "";

    try {
        $pdo = new PDO("mysql:host=".$host.";dbname=".$dbname, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
?>
