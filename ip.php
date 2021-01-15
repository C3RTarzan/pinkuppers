<?php


$id = session_start();
include('class/users.php');

$sesid = $_SESSION['id'];
$sesip = $_SESSION['nome_ip'];

$gameIP1 = rand(0, 255);
$gameIP2 = rand(0, 255);
$gameIP3 = rand(0, 255);
$gameIP4 = rand(0, 255);

$gameIP = $gameIP1 . '.' . $gameIP2 . '.' . $gameIP3 . '.' . $gameIP4;

while(true){
    $query_verificar = "select * from usuarios where ip = '$gameIP'";
    $result_verificar = mysqli_query($conexao, $query_verificar);
    $row_verificar = mysqli_num_rows($result_verificar);

    if($row_verificar > 0){
        $gameIP1 = rand(0, 255);
        $gameIP2 = rand(0, 255);
        $gameIP3 = rand(0, 255);
        $gameIP4 = rand(0, 255);

        $gameIP = $gameIP1 . '.' . $gameIP2 . '.' . $gameIP3 . '.' . $gameIP4;
    }else{
        break;
    }
}


$query = "UPDATE usuarios SET ip = '$gameIP' WHERE id = '$sesid'";


$result = mysqli_query($conexao, $query);
if($result == ''){
    echo "<script language='javascript' type='text/javascript'>alert('Erro!')</script>";
}

$query1 = "select * from usuarios where id = '$sesid'";
$result = mysqli_query($conexao, $query1);
$dado = mysqli_fetch_array($result);

$_SESSION['nome_ip'] = $dado["ip"];

header('Location: Home/index.php');

?>