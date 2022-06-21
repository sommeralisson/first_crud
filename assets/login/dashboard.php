<?php
    session_start();
    ob_start();

    if(isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }

    if((!isset($_SESSION['user'])) && (!isset($_SESSION['id']))) {
        $_SESSION['msg'] = '<p style="color:red;">Erro, necessário fazer o login para acessar a página!</p>';
        header("Location: ../../index");
    }
?>

<!DOCTYPE html>
    <html lang="pt-BR">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <title>First CRUD</title>

            <link rel="icon" type="image/x-icon" href="https://demo.areacentral.com.br/401/imagens/ac16.png">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

            <!-- Link file Css -->
            <link rel="stylesheet" href="../css/main.css">
        </head>
        <body>
            <header>
            </header>
            <main>
                <form action="assets/login/valida_login.php" method="POST" id="form-login" autocomplete="off">
                    <aside class="container-login">
                        <div class="header-login">
                            <div class="shape-login">
                                <h2 class="text-large">Storage ASMM</h2>
                                <p class="text-small">Sistema de Estoque</p>
                            </div>
                        </div>
                        <div class="description-login">
                            <h2>Bem Vindo!</h2>
                            <a href="valida_sair.php" class="button">Sair</a>
                        </div>
                    </aside>
                </form>
            </main>
            <footer>

            </footer>

            <!-- Link file Js -->
            <script src="../js/script.js"></script>
        </body>
    </html>
