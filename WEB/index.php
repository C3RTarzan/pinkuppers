<?php
session_start();
include('../class/users.php');
include('../verificar_login.php');

$sesip = $_SESSION['web_ip'];
$query_pri = "select * from web where ip = '{$sesip}'";

$result_pri = mysqli_query($conexao, $query_pri); // juntas os 2
$dado_pri = mysqli_fetch_array($result_pri); // extrair dados da tabela sql
$row_pri = mysqli_num_rows($result_pri);

if(!$row_pri > 0){
    header('Location: erro.php');
}
if($_SESSION['web_root'] == true){
    header('Location: root/index.php');
}
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
                <div>
                    <div class="cabe">
                        <form method="POST" action="web.php">
                            <input type="button" value="○">
                            <input class="buscaip" type="text" placeholder="Pesquisar por IP ou digitar URL" name="ipweb" require maxlength="15" autocomplete="off" value="<?php echo $_SESSION['web_ip'] ?>">
                            <i class="fa fa-search" type="submit" name="buscar"></i>
                        </form>
                    </div>
                    <div class="logar">
                        <div>
                            <div>
                                <span> <?php echo $_SESSION['web_ip'] ?> </span>
                                <i class="fa fa-window-close" aria-hidden="true"></i>
                            </div>
                            <ul>
                                <?php
                                    if(isset($_SESSION['web_root_pass'])): ?>
                                    <p><small><small>User/Senha invalidos.</small></small></p>   
                                <?php
                                    endif;
                                    unset($_SESSION['web_root_pass']);
                                ?>
                            </ul>
                            <form method="POST" action="root.php">
                                <label for="nome">User:</label>
                                <input name="user" class="labb" type="text" require maxlength="10" autocomplete="off"><br/>
                                <label for="nome">Senha:</label>
                                <input name="pass" class="labb" type="password" require maxlength="10" autocomplete="off"><br/>
                                <input type="submit" name="logar" value="Logar">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>