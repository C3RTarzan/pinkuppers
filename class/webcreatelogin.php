<?php

//LOGIN
$_SESSION['id'] = $dado["id"];
$_SESSION['usuario'] = $usuario;
$_SESSION['nome_usuario'] = $dado["nick"]; //receber o nick
$_SESSION['nome_cargo'] = $dado["cargo"]; //receber o cargo
$_SESSION['nome_email'] = $dado["email"]; //receber o email
$_SESSION['nome_ip'] = $dado["ip"]; //receber o ip
$_SESSION['nome_finance'] = $dado["finance"]; //dinheiro do usuario
//WEB
$_SESSION['web_ip'] = '1.1.1.1'; //ip do web
$_SESSION['web_root'] = false;
//LOG
$_SESSION['log_help'] = '';
$_SESSION['log_vps'] = 'Digite -help para ajuda...
';
//ROOT WEB
$_SESSION['log_help_root'] = 'Digite -help para ajuda...
';
$_SESSION['inv_log_root'] = '';

include 'webIps.php';
include 'log.php';
include 'vpsdados.php';

if ($_SESSION['log'] == ''){
    include("users.php");
    $log = 'Digite -help para ajuda...';
    $id = $_SESSION['id'];
    $query = "UPDATE log SET log = '$log' WHERE userid = '$id'";
    $result = mysqli_query($conexao, $query);
}


?>