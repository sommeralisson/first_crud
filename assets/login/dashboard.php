<?php

session_start();

!isset($_SESSION['nome']) ? header("Location: ../../index") : true;

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ÁREA CENTRAL [ ÁREA CENTRAL ]</title>

    <!-- Link style -->
    <link rel="stylesheet" href="../css/dashboard.css">

    <!-- Link Favicon -->
    <link rel="icon" type="image/x-icon" href="https://demo.areacentral.com.br/401/imagens/ac16.png">

    <!-- Link fonts -->
    <link rel="preconnect" href="https:/fonts.googleapis.com">
    <link rel="preconnect" href="https:/fonts.gstatic.com" crossorigin>
    <link href="https:/fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Poppins:wght@400;500;700&family=Spartan:wght@400;700&display=swap" rel="stylesheet">

</head>
<body>
    <div>
        <div id="cabecalho" class="cabecalho">
            <div>
                <img src="https://demo.areacentral.com.br/401/empresas/demo/logo-demo.png" alt="">
            </div>
            <div>
                <a href="./valida_sair.php" id="logout">Sair</a>
            </div>
            <div class="principal">
                <section>
                    <?= sprintf('<h2>Olá %s</h2>', $_SESSION['nome']); ?>
                </section>
            </div>
        </div>
    </div>
    <div>
        <aside>
            <section id="container" class="active">
                <header id="header-aside">
                    <div class="default-margin-top">
                        <div id="logo" alt="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="24" viewBox="0 0 29 22" fill="none" class="svg-inline replaced-svg">
                            <path d="M10.5199 3.7391L8.02935 1.6846L0.00426005 11.4129L2.4948 13.4674L10.5199 3.7391Z" fill="white"></path>
                            <path d="M2.0545 8.89113L0 11.3817L11.7221 21.0515L13.7766 18.5609L2.0545 8.89113Z" fill="white"></path>
                            <path d="M19.742 11.3315L17.2514 9.27703L9.23249 18.9979L11.723 21.0524L19.742 11.3315Z" fill="white"></path>
                            <path d="M17.7081 18.185L20.1987 20.2395L27.5151 11.3703L25.0246 9.31576L17.7081 18.185Z" fill="white"></path>
                            <path d="M26.082 13.108L28.1365 10.6174L16.4144 0.947632L14.3599 3.43817L26.082 13.108Z" fill="white"></path>
                            <path d="M8.47585 10.5695L10.9664 12.624L18.2829 3.75473L15.7923 1.70023L8.47585 10.5695Z" fill="white"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="default-margin-top">
                        <button id="btn-mobile"><img id="lista" src="../img/menu.svg" alt=""></button>
                    </div>
                </header>
                <main>
                    <nav id="nav">
                        <ul>
                            <li>
                                <input type="search" name="search" id="search" placeholder="Buscar">
                                <img id="sr" src="../img/search.svg" alt="">
                            </li>
                            <li>
                                <div>
                                    <img src="../img/grid.svg" alt="">
                                </div>
                                <div>
                                    <a href="./dashboard.php">Inicio</a>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <img src="../img/pet.svg" alt="">
                                </div>
                                <div>
                                    <a href="#">Perfil</a>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <img src="../img/user.svg" alt="">
                                </div>
                                <div>
                                    <a href="#">Cadastro</a>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <img src="../img/vet.svg" alt="">
                                </div>
                                <div>
                                    <a href="#">Ajuda</a>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <img src="../img/settings.svg" alt="">
                                </div>
                                <div>
                                    <a href="#">Página</a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </main>
            </section>
        </aside>
    </div>
    <footer>

    </footer>
</body>
<script src="../js/script.js"></script>
</html>