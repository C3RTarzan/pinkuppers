<?php
session_start();
include('../class/users.php');
if(empty($_POST['nick']) || empty($_POST['senha'])){ //checar se tem campos em branco
    $_SESSION['campos_branco'] = true;
    header('Location: index.php');
    exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['nick']);  // criando variavel
$senha = mysqli_real_escape_string($conexao,$_POST['senha']);  // criando variavel
$senhaMD5=MD5($senha);
$query = "select * from usuarios where nick = '{$usuario}' and senha = '{$senhaMD5}'"; //consulta com bd

$result = mysqli_query($conexao, $query); // juntas os 2
$dado = mysqli_fetch_array($result); // extrair dados da tabela sql
$row = mysqli_num_rows($result); // verificar se existe uma linha

if($row > 0){
    $_SESSION['usuario'] = $usuario;
    $_SESSION['nome_usuario'] = $dado["nick"]; //receber o nick
    $_SESSION['nome_cargo'] = $dado["cargo"]; //receber o nick
    $_SESSION['nome_email'] = $dado["email"]; //receber o nick

    if($_SESSION['nome_cargo'] == 'admin'){ // verificar cargo
        header('Location: ../painel_admin.php'); // se for para onde vai ser redirecionado
    }
    if($_SESSION['nome_cargo'] == 'user'){ // vai redirecionar automatico
        header('Location: ../Home/index.php'); // se for para onde vai ser redirecionado
    }
    


    exit();
}else{
    $_SESSION['nao_autentificado'] = true;
    header('Location: index.php'); // se for para onde vai ser redirecionado
    exit();
}








?>