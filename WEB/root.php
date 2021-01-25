<?php
session_start();
include('../class/users.php');

$sesip = $_SESSION['web_ip'];

$query_pri = "select * from web where ip = '{$sesip}'";

$result_pri = mysqli_query($conexao, $query_pri); // juntas os 2
$dado_pri = mysqli_fetch_array($result_pri); // extrair dados da tabela sql
$row_pri = mysqli_num_rows($result_pri);

if($row_pri > 0){
    $userid = $dado_pri["userid"];
    $ip =  $_SESSION['id'];
    if(isset($_POST['logar'])){
        $usuario = mysqli_real_escape_string($conexao,$_POST['user']);  // criando variavel
        $senha = mysqli_real_escape_string($conexao,$_POST['pass']);
        $query = "select * from web where userr = '{$usuario}' and pass = '{$senha}' and userid = '{$userid}'";

        $result = mysqli_query($conexao, $query); // juntas os 2
        $dado = mysqli_fetch_array($result); // extrair dados da tabela sql
        $row = mysqli_num_rows($result);
    }
    if($row > 0){
        echo "<script language='javascript' type='text/javascript'>alert('Entrou')</script>";
    }else{
        echo "<script language='javascript' type='text/javascript'>alert('Senha/User incorreto')</script>";
}
}else{
    echo "<script language='javascript' type='text/javascript'>alert('IP não encontrado')</script>";
}

