<?php
session_start();
include('../../class/users.php');
include '../../class/rootlog.php';
$id = $_SESSION['id'];
$_SESSION['log_help'] = '';

$cdg = $_POST['barra'];
$cdg = strtoupper($cdg);
$log = $_SESSION['log'];
$inv_id = $_SESSION['inv_id'];

if( $cdg == 'CLEAR' || $cdg == 'LIMPAR'){
    $valor = 'Digite -help para ajuda...';
    $query = "UPDATE log SET log = '$valor' WHERE userid = '$inv_id'";
    $result = mysqli_query($conexao, $query);
    header('Location: logs.php');
    die();
}
if( $cdg == 'HELP' || $cdg == '-HELP' || $cdg == 'AJUDA'){
    $_SESSION['log_help'] = '
-------------------
- clear    //Limpar log
- -i    //Limpar somente os ips';
    header('Location: logs.php');
    die();
}

$_SESSION['log_help'] = '
ERRO, comando não reconhecido.';
header('Location: logs.php');




?>