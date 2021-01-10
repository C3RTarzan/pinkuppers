<?php   
    session_start();
    session_unset();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link href="estilo/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Courier+Prime:ital,wght@0,700;1,700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Descrição do meu website">
    <meta name="keywords" content="palavra,chave,site">
    <link href="../indexRL.css" rel="stylesheet" />
    
    <title>pinkuppers</title>
</head>
<body>
    <div class="container">
    <div class="aa">
        <h2>Login</h2>
        <form class="box" method="POST" action="account.php">
            <input type="use" name="nick" placeholder=" Nick" require maxlength="15" autocomplete="off"/><br>
            <input type="password" name="senha" placeholder=" Senha" require maxlength="15" autocomplete="off"/><br>
            <input type="submit" name="login" value="Login" autocomplete="off"/>
        </form></br>
        <a href="../Registro/index.php">Ainda não é inscrito? <strong>Cadastre-se!</strong></a>
        <?php
            if(isset($_SESSION['nao_autentificado'])): ?>
                <p><small><small> Usuario/Senha invalidos. </small></small></p>          
        <?php
        endif;
        unset($_SESSION['nao_autentificado']);
        ?>


        <?php
            if(isset($_SESSION['campos_branco'])): ?>
            <p><small><small> Preencha todos os campos. </small></small></p>   
        <?php
            endif;
            unset($_SESSION['campos_branco']);
        ?>

        <?php
            if(isset($_SESSION['cadastrado_socesso'])): ?>
            <p><small><small> Cadastrado com Sucesso, por favor efetue o login. </small></small></p>   
        <?php
            endif;
            unset($_SESSION['cadastrado_socesso']);
        ?>

    </div>

   </div>
           
</body>
</html> 