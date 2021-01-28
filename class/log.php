<?php
$id = $_SESSION['id'];

$query = "select * from log where userid = '$id'";
$result = mysqli_query($conexao, $query);
$row = mysqli_num_rows($result);
if(!$row > 0){
    $query1 = "INSERT INTO log (userid) VALUES ('$id')";
    $result1 = mysqli_query($conexao, $query1);
}

$query2 = "select * from log where userid = '$id'";
$result2 = mysqli_query($conexao, $query2);
$dado = mysqli_fetch_array($result2);

$_SESSION['log'] = $dado["log"];
$_SESSION['log_id'] = $dado["userid"];
?>