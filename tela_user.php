<?php
include "LR/privado.php";
$nome_menu = $user;
$nome_menu = ucfirst($nome_menu);
$nome_menu = explode(" ", $nome_menu);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Game of Trinity | Oficial</title>
    <link rel="stylesheet" href="css/darkeus.css">
    <link rel="icon" href="img/logotest.png" type="image/x-icon">
    <link rel="stylesheet" href="css/bulmaswatch.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />

    <!--Coisas de SEO. (Isso faz com que o link do seu site tenha discord embed!)-->
    <meta name="theme-color" content="#57befc">
    <!--Azul claro padrão É a cor incorporada-->
    <meta name="title" content="Game of Trinity - Web | Discord bot">
    <!--O título do link no embed-->
    <meta name="description" content="Descrição">
    <!--Descrição ofc-->
    <meta name="keywords" content="Game of Trinity, Discord bot, Best Discord bot, vote, Fury, discord nitro comprar, nitro discord">
    <!--Um pouco de SEO para que o Google possa encontrar melhor seu site na pesquisa-->
    <meta name="robots" content="index, follow"><!-- Ignorável -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
</head>

<body>
    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="">
                <img src="img/logotest.png" width="30px" height="55px">
            </a>

            <a role="button" class="navbar-burger" data-target="navbarBasicExample" aria-label="menu" aria-expanded="false">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>

            <div class="navbar-menu" id="navMenu">
            </div>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
                <!-- ?Mude o navbar-start para navbar-end se quiser que os links fiquem à direita.-->
                <a class="navbar-item">
                    Home
                </a>

                <a class="navbar-item" href="" target="_blank">
                    Loja
                </a>

                <a class="navbar-item">
                    Rank
                </a>
                <a class="navbar-item" href="https://discord.gg/VvGw4tNXkR" target="_blank">
                    Suporte
                </a>

                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">
                        Vote
                    </a>
                    <!--Menu suspenso para votação-->
                    <div class="navbar-dropdown">
                        <a class="navbar-item" href="https://disboard.org/server/834918146963406858" target="_blank">
                            Disboard
                        </a>
                        <a class="navbar-item" href="https://disforge.com/server/46639-g-alpha-oslash-f-ri-eta-i-y" target="_blank">
                            Disforge
                        </a>
                        <a class="navbar-item" href="https://discordservers.com/server/834918146963406858" target="_blank">
                            Discordservers
                        </a>
                        <a class="navbar-item" href="https://discord.io/gfriiy" target="_blank">
                            Discord.io
                        </a>
                    </div>

                </div>

            </div>

        </div>
        <!--Menu de register e login-->
        <a class="navbar-item">
            <span class="name"><?php echo $nome_menu[0]; ?></span>
        </a>
        <a class="navbar-item">
            <center><a class="logout" href="LR/logout.php"><span class="picon"><i class="fas fa-sign-out-alt"></i></span>Sair</a></center>
        </a>
    </nav>
    <div>
        <div class="title">
            <p class="header-ub"><b>Gαмє øf ŧriηiŧy 👑</b></p>
        </div>
        <div class="desc">
            <h6>
                FASE BETA
                • Site em construção
                • Bot em construção
                • Reinos em construção</h6>
        </div>
        <div class="button-section">
            <a href="https://discord.gg/VvGw4tNXkR" target="_blank" class="button is-primary is-outlined is-large btn-hvr"><i class="fab fa-fw fa-fw fa-discord"></i> Nosso Discord!</a>
        </div>
    </div>

    <div class="container2">
        <div class="divider12"><svg xmlns="" viewBox="0 0 1440 320">
                <path fill="#242222" fill-opacity="1" d="M0,96L60,80C120,64,240,32,360,53.3C480,75,600,149,720,160C840,171,960,117,1080,117.3C1200,117,1320,171,1380,197.3L1440,224L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z">
                </path>
            </svg></div>
        <div class="why-us is-large is-white">
            <h1>Recursos</h1>
        </div>
        <div class="columns">
            <div class="column">
                <div class="card-custom">
                    <i class="fas fa-rocket fa-7x icons123"></i><br>
                    <h3 class="textcustom"><b>Compra</b></h3>
                    <p class="text">Compra rápida e segura, todos os nossos produtos são oficias nada é roubado ou falsificado.
                    </p>
                </div>
            </div>
            <div class="column">
                <div class="card-custom">
                    <i class="fas fa-question-circle fa-7x icons123"></i><br>
                    <h3 class="textcustom"><b>Suporte</b></h3>
                    <p class="text">Nosso suporte pode dar algumas bugadas, mas pode ter certeza que vamos arrumar.</p>
                </div>
            </div>
            <div class="column">
                <div class="card-custom">
                    <i class="fas fa-gift fa-7x icons123"></i><br>
                    <h3 class="textcustom"><b>Sorteios</b></h3>
                    <p class="text">Nossos sorteios tem varias coisas, então entre nessa porra logo menor.</p>
                </div>
            </div>
            <div class="column">
                <div class="card-custom">
                    <i class="fas fa-cogs fa-7x icons123"></i><br>
                    <h3 class="textcustom"><b>Manutenção</b></h3>
                    <p class="text">A gente sempre ta arrumando alguma coisa, como o servidor ou bots e etc...</p>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

    </div>
    <svg xmlns="" viewBox="0 0 1440 320">
        <path fill="#030303" fill-opacity="1" d="M0,128L48,128C96,128,192,128,288,160C384,192,480,256,576,272C672,288,768,256,864,218.7C960,181,1056,139,1152,138.7C1248,139,1344,181,1392,202.7L1440,224L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z">
        </path>
    </svg>
    <div class="server-count columns">
        <div class="column">
            <div class="value custom0" akhi="1">0</div>
            <h1 class="counterr"><i class="fas fa-server icon-color-white"></i> <b>Server</b></h1>
        </div>


        <div class="column">
            <div class="value custom0" akhi="50">0</div>
            <h1 class="counterr"><i class="fas fa-align-center icon-color-white"></i> <b>Canais</b></h1>
        </div>

        <div class="column">
            <div class="value custom0" akhi="100">0</div>
            <h1 class="counterr"><i class="fas fa-users icon-color-white"></i> <b>Membros</b></h1>
        </div>
    </div>

    <div class="footer">
        <div class="copyright" align="center">
            <script>
                document.write('&copy; ');
                document.write(' Game of Trinity ');
                document.write(new Date().getFullYear());
                document.write('<br><br>Todos os direitos reservados ')
            </script>
        </div>
    </div>

    <script src="js/index.js"></script>
</body>