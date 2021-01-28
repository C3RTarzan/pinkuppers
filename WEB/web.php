<?php
session_start();
include('../class/users.php');

$sesip = mysqli_real_escape_string($conexao, $_POST['ipweb']); 
$query_pri = "select * from web where ip = '{$sesip}'";

$result_pri = mysqli_query($conexao, $query_pri); // juntas os 2
$dado_pri = mysqli_fetch_array($result_pri); // extrair dados da tabela sql
$row_pri = mysqli_num_rows($result_pri);

if($row_pri > 0){
    $valor = mysqli_real_escape_string($conexao, $_POST['ipweb']); 
    $ar1 = array(".");
    $ar2 = array("");
    $tratado = str_replace($ar1, $ar2, $valor);
    if(is_numeric($tratado)){
        $_SESSION['web_ip'] = $valor;
        header('Location: index.php');
    }else{
        header('Location: index.php');
    }
}else{
    $valor = mysqli_real_escape_string($conexao, $_POST['ipweb']); 
    $ar1 = array(".");
    $ar2 = array("");
    $tratado = str_replace($ar1, $ar2, $valor);
    if(is_numeric($tratado)){
        $_SESSION['web_ip'] = $valor;
        header('Location: erro.php');
    }else{
        header('Location: index.php');
    }
}
?>