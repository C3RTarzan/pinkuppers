<?php
include('users.php');
$id = $_SESSION['id'];
$vali = true;

$query = "select * from software where userid = '$id'";
$result = mysqli_query($conexao, $query);
$quantia = mysqli_num_rows($result);
$dado = mysqli_fetch_array($result);

$_SESSION["vps_id"] = $dado["userid"];
$_SESSION["vps_itens"] = $dado["itens"];
$_SESSION["vps_version"] = $dado["version"];
$_SESSION["vps_ip"] = $dado["userip"];
?>