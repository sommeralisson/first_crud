<?php
    session_start();
    require '../config/connection.php';

    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    if(!empty($dados['sendlogin'])) {
        $query_usuario = "SELECT id_usuario, nome, senha
                            FROM usuarios
                        WHERE nome = :nome
                        LIMIT 1";
        $result_usuario = $pdo->prepare($query_usuario);
        $result_usuario->bindValue(":nome", $dados['user']);
        $result_usuario->execute();

        if(($result_usuario) AND ($result_usuario->rowCount() != 0)) {
            $row_usuario = $result_usuario->fetch(PDO::FETCH_ASSOC);

            if(password_verify($dados['pass'], $row_usuario['senha'])) {
                $_SESSION['id'] = $row_usuario['id_usuario'];
                $_SESSION['nome'] = $row_usuario['nome'];
                header("Location: ./dashboard.php");
            } else {
                $_SESSION['user'] = $dados['user'];
                $_SESSION['pass'] = $dados['pass'];
                $_SESSION['msg'] = "<span style='color:darkred'>Usuário ou senha inválidos</span>";
                header("Location: ../../index.php");
            }
        } else {
            $_SESSION['user'] = $dados['user'];
            $_SESSION['pass'] = $dados['pass'];
            $_SESSION['msg'] = "<span style='color:darkred'>Usuário ou senha inválido!</span>";
            header("Location: ../../index.php");
            exit;
        }
    }
?>