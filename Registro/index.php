<?php 
    session_start();
    include '../verificar_logado.php'
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
    <script type="text/javascript" async="" src="check.js"></script>
    
    <title>Registro</title>
</head>
<body>
    <!--<video autoplay muted loop id="myVideo">
        <source src="back/bc.mp4" type="video/mp4">
    </video>-->
    <div class="container2">
        <div >
            <div class="aa2">
                <h2>Registro</h2>
                <form class="box2" method="POST" action="account.php" autocomplete="off">
                    <input type="use" name="nick"  placeholder=" Nick" require maxlength="15" /><br>
                    <input type="email" name="email" placeholder=" email" require maxlength="40" /><br>
                    <input type="password" name="senha" id="pass1" placeholder=" Senha" require maxlength="15" /><br>
                    <input type="password" name="confsenha" id="pass2" placeholder=" Confirmar Senha" require maxlength="15" /><br>
                    <input type="submit" name="register" value="Register" />
                </form></br>
                <a href="../Login/index.php">Já possui uma conta? <strong>Logar-se!</strong></a>
                
                <?php
                    if(isset($_SESSION['nao_autentificado'])): ?>
                <p><small><small> Usuario/email já cadastrados. </small></small></p>   
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
                    if(isset($_SESSION['senha_conc'])): ?>
                <p><small><small> Senhas não coincidem. </small></small></p>   
                <?php
                    endif;
                    unset($_SESSION['senha_conc']);
                ?>
            </div>
           
        </div>
    </div>
   
    
</body>
</html> 