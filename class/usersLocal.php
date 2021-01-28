<?php

$id = $_SESSION['id'];

$query = "select * from web where userid = '{$id}'";
$result = mysqli_query($conexao, $query);
$dado = mysqli_fetch_array($result); 

$_SESSION['local_user'] = $dado["userr"];
$_SESSION['local_pass'] = $dado["pass"];

?>