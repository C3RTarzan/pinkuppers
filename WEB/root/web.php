<?php
session_start();
include('../../class/users.php');
/*
$sesip = mysqli_real_escape_string($conexao, $_POST['ipweb']); 
$query_pri = "select * from web where ip = '{$sesip}'";

$result_pri = mysqli_query($conexao, $query_pri); // juntas os 2
$dado_pri = mysqli_fetch_array($result_pri); // extrair dados da tabela sql
$row_pri = mysqli_num_rows($result_pri);
*/
$_SESSION['web_root'] = false;
header('Location: ../index.php');
?>