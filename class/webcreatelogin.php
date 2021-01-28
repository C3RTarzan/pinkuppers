<?php

$_SESSION['id'] = $dado["id"];
$_SESSION['usuario'] = $usuario;
$_SESSION['nome_usuario'] = $dado["nick"]; //receber o nick
$_SESSION['nome_cargo'] = $dado["cargo"]; //receber o cargo
$_SESSION['nome_email'] = $dado["email"]; //receber o email
$_SESSION['nome_ip'] = $dado["ip"]; //receber o ip
$_SESSION['nome_finance'] = $dado["finance"]; //dinheiro do usuario
$_SESSION['web_ip'] = '1.1.1.1'; //ip do web
$_SESSION['web_root'] = false;
$_SESSION['log_help'] = '';


include 'webIps.php';
include 'log.php'

?>