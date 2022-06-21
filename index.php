<?php
    session_start();
    ob_start();
    unset($_SESSION['nome']);

    if(isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
?>

<!DOCTYPE html>
    <html lang="pt-BR">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <title>ÁREA CENTRAL [ ÁREA CENTRAL ]</title>

            <link rel="icon" type="image/x-icon" href="https://demo.areacentral.com.br/401/imagens/ac16.png">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

            <!-- Link file Css -->
            <link rel="stylesheet" href="assets/css/main.css">
        </head>
        <body>
        <body>
            <div class="container">
                <main>
                    <div class="header">
                        <p>Precisa de ajuda?</p>
                        <button class="suporte">Suporte</button>
                    </div>
                    <div class="instrucoes">
                        <div class="texto">
                            <h2>
                                Instruções
                            </h2>
                            <ul>
                                <li>Se você for administrador, associado ou fornecedor identifique-se ao lado, informando seu usuário e senha.</li>
                                <li>Sua senha é de uso exclusivo, não divulgue a ninguém Não esqueça de sair do sistema após o uso.</li>
                                <li>Se você não conseguir permanecer conectado ao sistema, verifique a configuração de cookies de seu navegador.</li>
                            </ul>
                        </div>
                        <div class="rodape-icon">
                            <img src="./assets/img/logo-AC.png" alt="">
                        </div>
                    </div>
                    <div class="principal">
                        <div class="login">
                            <form action="assets/login/valida_login.php" method="POST" id="form-login" autocomplete="off">
                                <img src="https://demo.areacentral.com.br/401/empresas/demo/logo-demo.png" alt="">
                                <h3>Entrar</h3>
                                <p>Informe seu usuário e senha de acesso abaixo</p>
                                <label for="usuario">
                                    Usuário
                                    <input type="text" name="user" value="<?php if(isset($_SESSION['user'])){ echo $_SESSION['user']; unset($_SESSION['user']); }?>" placeholder="Insira seu usuário...">
                                </label>
                                <br>
                                <label for="senha">
                                    Senha
                                    <input type="password" name="pass" value="<?php if(isset($_SESSION['pass'])){ echo $_SESSION['pass']; unset($_SESSION['pass']); }?>" placeholder="Insira sua senha...">
                                </label>
                                <br>
                                <button type="submit" class="entrar" form="form-login" name="sendlogin" value="acessar">Iniciar sessão</button>
                            </form>
                        </div>
                    </div>
                </main>
            </div>
        </body>
    </html>
