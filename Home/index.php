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
            <div class="menu">
                <form>
                    <input type="Button" name="home" value="HOME" onclick="redireHome()"/> 
                    <input type="Button" name="vps" value="VPS" onclick="redireVPS()"/>
                    <input type="Button" name="web" value="WEB" onclick="redireWEB()"/>
                    <input type="Button" name="log" value="LOG" onclick="redireLOG()"/>
                    <input type="Button" name="btc" value="BTC" onclick="redireBTC()"/>
                    <input type="Button" name="bot_net" value="Bot-Net" onclick="redireBotNet()"/>
                    <input type="Button" name="mission" value="Mission"onclick="redireMission()" />
                    <input type="Button" name="clan" value="CLAN" onclick="redireClan()"/>
                    <input type="Button" name="task" value="UP/DOWN" onclick="redireUpDown()"/>
                    <input type="Button" name="hardware" value="HARDWARE" onclick="redireHardWare()"/>
                    <input type="Button" name="dark" value="DARK" onclick="redireDark()"/>
                    
                    <input type="Button" name="option" value=":" for="options" id="option" onclick="menu()"/> 
                    <div id="options">
                        <ul>
                            <li onclick="redireAcc()"><a>Acc</a></li>
                            <li onclick="redireOptions()"><a>Opções</a></li>
                            <li class="exit" onclick="redireExit()"><a>Sair</a></li>
                        </ul>
                    </div>
                </form>
            </div>
    </header>
    <nav>
        <div class="inff">
            <ul>
                <a name="ip" type="number">111.111.111.111</a></br>
                <a name="finance" type="number">100.00</a>
            </ul>
        </div>
    </nav>
    <!--<div class="Caminho">
        <ul>
            <li><a href="VPS/index.php/">HOME</a></li>
            <li><a href="VPS/index.php/">VPS</a></li>
            <li><a href="VPS/index.php/">WEB</a></li>         
        </ul>
    </div>
    <section id="conteudo"></section>-->

    <!--<script>
        document.querySelectorAll('a').forEach(link => {
            const conteudo = document.getElementById('conteudo');
            link.onclick = function(e){
                e.preventDefault()
                fetch(link.href)
                    .then(resp => resp.text())
                    .then(html => conteudo.innerHTML = html)
            }
        })
    </script>-->

    <!--<section>
        <div class="info">
            <ul>
                <li>SISTEMA: </li>
                <li>NOME</li>
                <li>VERSÃO</li>
                <li>MEMORIA RAM</li>
                <li>PROCESSADOR</li>
            </ul>
        </div>
        <div class="cmd">
            <div class="cmds">
                <span>c:\></span>
        </div>
        <div class="fod">
            <ul>
                <li>NOME.EXE</li>
                <li>NOME.EXE</li>
                <li>NOME.EXE</li>
            </ul>
        </div>
    </section>-->

</body>
</html>