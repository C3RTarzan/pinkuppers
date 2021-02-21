<?php
session_start();
include('../class/users.php');
$id = $_SESSION['id'];

$log = mysqli_real_escape_string($conexao, $_POST['log']);
$query = "UPDATE log SET log = '$log' WHERE userid = '$id'";
$result = mysqli_query($conexao, $query);
header('Location: index.php');

?>