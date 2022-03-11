<!DOCTYPE html>
<html lang="pt-BR">
<?php
    require 'assets/validation/config.php';

    $lista = [];
    $sql = $pdo->query("SELECT * FROM usuarios");

    if($sql->rowCount() > 0) {
        $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
    }
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First CRUD</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Link file Css -->
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
    <header>
        <img src="assets/img/background-login.jpg" class="background-img-login" alt="Imagem de fundo">
    </header>
    <main>
        <form action="assets/validation/cadastro.php" method="POST" id="form-login" autocomplete="off">
            <aside class="container-login">
                <div class="header-login">
                    <div class="shape-login">
                        <h2 class="text-large">Storage ASM</h2>
                        <p class="text-small">Sistema de Estoque</p>
                    </div>
                </div>
                <div class="description-login">
                    <h2>Bem Vindo</h2>
                    <p>Para iniciar a sessão, por favor, insira os dados ou cadastre-se para prosseguir.</p>
                </div>
                <div class="container-credentials">
                    <div class="content-user">
                        <p class="text-small">Username</p>
                        <input type="text" name="user" placeholder="Insira seu usuário...">
                    </div>
                    <div class="content-pass">
                        <p class="text-small">Password</p>
                        <input type="password" name="pass" placeholder="Insira sua senha...">
                    </div>
                    <div class="sign-login">
                        <button type="submit" class="large-button" form="form-login">Iniciar sessão</button>
                    </div>
                </div>
                <div class="footer-login">
                    <p>Ainda não possui conta?</p>
                    <button type="button" class="small-button" id="create-account">Criar conta</button>
                </div>
            </aside>
        </form>
    </main>
    <footer>

    </footer>

    <!-- Link file Js -->
    <script src="assets/js/script.js"></script>
</body>
</html>