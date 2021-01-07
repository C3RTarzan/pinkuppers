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
    <link href="css/css.css" rel="stylesheet" />

    <title>pinkuppers</title>
</head>
<body>
    <h3> Usuário: <?php echo $_SESSION['nome_usuario']; ?> </h3>
    <h3> Cargo: <?php echo $_SESSION['nome_cargo']; ?> </h3>
    <h3> E-mail: <?php echo $_SESSION['nome_email']; ?> </h3>
    <a href="../logout.php">Sair</a>
    <nav>
        <div class="logo">Nome</div>
        <nav class="desktop">
            <div class="home">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">VPS</a></li>
                    <li><a href="">WEB</a></li>
                </ul>
            </div>
        </nav>
        <nav>
            <!--Ainda n foi feito-->
        </nav>
    </nav>
    <section>
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
    </section>

</body>
</html>