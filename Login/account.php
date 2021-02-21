<?php
session_start();
include('../class/users.php');

//verification
if(empty($_POST['nick_login']) || empty($_POST['senha_login'])){ //checar se tem campos em branco
    $_SESSION['campos_branco'] = true;
    header('Location: index.php');
    exit();
}

//login
$usuario = mysqli_real_escape_string($conexao, $_POST['nick_login']);  // criando variavel
$senha = mysqli_real_escape_string($conexao,$_POST['senha_login']);  // criando variavel
$senhaMD5=MD5($senha);
$query = "select * from usuarios where nick = '{$usuario}' and senha = '{$senhaMD5}'"; //consulta com bd

$result = mysqli_query($conexao, $query); // juntas os 2
$dado = mysqli_fetch_array($result); // extrair dados da tabela sql
$row = mysqli_num_rows($result); // verificar se existe uma linha

if($row > 0){
    include '../class/webcreatelogin.php';

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