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
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

    <title>pinkuppers</title>
</head>
<body>
    <!--<h3> Usuário: <?php// echo $_SESSION['nome_usuario']; ?> </h3>
    <h3> Cargo: <?php// echo $_SESSION['nome_cargo']; ?> </h3>
    <h3> E-mail: <?php// echo $_SESSION['nome_email']; ?> </h3>
    <a href="../logout.php">Sair</a>-->
    <header>
            <div class="menu">
                <ul>
                    <input type="Button" name="home" value="HOME" /> 
                    <input type="Button" name="vps" value="VPS" formaction="VPS/index.php"/>
                    <input type="Button" name="web" value="WEB" />
                    <input type="Button" name="log" value="LOG" />
                    <input type="Button" name="btc" value="BTC" />
                    <input type="Button" name="bot_net" value="Bot-Net" />
                    <input type="Button" name="mission" value="Mission" />
                    <input type="Button" name="clan" value="CLAN" />
                    <input type="Button" name="task" value="UP/DOW" />
                    <input type="Button" name="hardware" value="HARDWARE" />
                    <input type="Button" name="dark" value="DARK" />
                    <input type="Button" name="option" value=":" for="options" id="option"/>
                    <div id="options">
                        <a name="sair" id="sair">oiiii</a>
                    </div>
                </ul>
            </div>
    </header>
    <nav>
        <div class="inff">
            <ul>
                <a name="ip" type="number_format">111.111.111.111</a></br>
                <a name="finance" type="number_format">100.00</a>
            </ul>
        </div>
    </nav>
    <a href="VPS/index.php/">Anatomia da TAG</a><br/>
    <section id="conteudo"></section>

    <!--<script>
        document.querySelectorAll('input').forEach(link => {
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