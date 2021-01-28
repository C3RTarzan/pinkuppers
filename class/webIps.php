<?php

function generateRandomStringUser($size = 6){
    $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuwxyz0123456789";
    $randomString = '';
    for($i = 0; $i < $size; $i = $i+1){
       $randomString .= $chars[mt_rand(0,60)];
    }
    return $randomString;
 }
 function generateRandomStringPass($size = 8){
    $chars = "123456789";
    $randomString = '';
    for($i = 0; $i < $size; $i = $i+1){
       $randomString .= $chars[mt_rand(0,8)];
    }
    return $randomString;
 }

$randomUser = generateRandomStringUser();
$randomPass = generateRandomStringPass();

$id = $_SESSION['id'];
$ip = $_SESSION['nome_ip'];

$query_verificar = "select * from web where userid = '$id'"; //consulta com bd
$result_verificar = mysqli_query($conexao, $query_verificar); // juntas os 2
$row_verificar = mysqli_num_rows($result_verificar); // verificar se existe uma linha

if($row_verificar == 0){
    $query = "INSERT into web (ip, userid, userr, pass) VALUES ('$ip', '$id', '$randomUser', '$randomPass')";
    $result = mysqli_query($conexao, $query);
}

?>