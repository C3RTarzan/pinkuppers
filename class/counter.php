<?php
include('users.php');
session_start();

date_default_timezone_set('America/Sao_Paulo');
$today = time();
if(isset($_SESSION['time_upload'])){
    $time = $_SESSION['time_upload_sec'];
    if($today >= $time){
        $ip = $_SESSION['web_ip'];
        $query = "SELECT * from usuarios WHERE ip = '$ip'";
        $result = mysqli_query($conexao, $query);
        $dado = mysqli_fetch_array($result);
        $id = $dado['id'];
        $state = "off";
        $query = "INSERT INTO software (userid, userip, itens, version, state) VALUES ('$id', '$ip', '$itens', '$version', '$state')";
        $result = mysqli_query($conexao, $query);
        unset($_SESSION['campos_branco']);
        header('Location: ../VPS/index.php');
        exit();
    }
}



?>