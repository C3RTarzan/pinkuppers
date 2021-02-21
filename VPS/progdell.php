<?php
session_start();
include('../class/users.php');
$id = $_SESSION['id'];

$query = "select * from software where userid = '$id' and itens = '{$senhaMD5}'"; //consulta com bd

$result = mysqli_query($conexao, $query); // juntas os 2
$row = mysqli_num_rows($result); // verificar se existe uma linha


?>
