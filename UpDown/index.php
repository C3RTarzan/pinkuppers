<?php
session_start();
include('../verificar_login.php');
?>





<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Descrição do meu website">
    <meta name="keywords" content="palavra,chave,site">
    <link href="css.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="https://kit.fontawesome.com/4095fc3d99.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <script type="text/javascript" src="script.js"></script>

    <title>pinkuppers</title>
</head>
<body>
    <!--<h3> Usuário: <?php// echo $_SESSION['nome_usuario']; ?> </h3>
    <h3> Cargo: <?php// echo $_SESSION['nome_cargo']; ?> </h3>
    <h3> E-mail: <?php// echo $_SESSION['nome_email']; ?> </h3>
    -->
    
    <header>
            <div id="menu">
                <div>
                    <form class="logo"></form>
                    <form class="bt_opt">
                        <input type="Button" name="option" value=":" for="options" id="option" onclick="menu()"/> 
                    </form>
                </div>
                <div id="options">
                    <ul>
                        <li onclick="redireAcc()"><a>Acc</a></li>
                        <li onclick="redireOptions()"><a>Opções</a></li>
                        <li class="exit" onclick="redireExit()"><a>Sair</a></li>
                    </ul>
                </div>
            </div>   
            <div id="menuL">
                <form>
                    <input type="Button" name="home" value="HOME" onclick="redireHome()"/></br>
                    <input type="Button" name="vps" value="VPS" onclick="redireVPS()"/></br>
                    <input type="Button" name="web" value="WEB" onclick="redireWEB()"/></br>
                    <input type="Button" name="log" value="LOG" onclick="redireLOG()"/></br>
                    <input type="Button" name="btc" value="BTC" onclick="redireBTC()"/></br>
                    <input type="Button" name="bot_net" value="Bot-Net" onclick="redireBotNet()"/></br>
                    <input type="Button" name="mission" value="Mission"onclick="redireMission()" /></br>
                    <input type="Button" name="clan" value="CLAN" onclick="redireClan()"/></br>
                    <input type="Button" name="task" value="UP/DOWN" onclick="redireUpDown()"/></br>
                    <input type="Button" name="hardware" value="HARDWARE" onclick="redireHardWare()"/></br>
                    <input type="Button" name="dark" value="DARK" onclick="redireDark()"/></br>
                </form>
                <div id="inff">
                    <ul>
                        <a class="ip" name="ip" type="number"><?php echo $_SESSION['nome_ip']; ?></a></br>
                        <a class="finance" name="finance" type="number"><?php echo $_SESSION['nome_finance']; ?></a>
                    </ul>
                </div>
            </div>     
    </header>
    <section id="section">
        <div>
            <div>
                <span>oiiiii</span>     
            </div>
        </div>
    </section>
</body>
</html>