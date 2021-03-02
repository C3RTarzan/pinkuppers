<?php
session_start();
include('../class/users.php');
$meuid = $_SESSION['id'];
$query = "SELECT * from software where userid = '$meuid'";
$result = mysqli_query($conexao, $query);
$row = mysqli_num_rows($result);

for($i = 0; $i < $row; $i++){
    $dado = mysqli_fetch_array($result);
    $id = $dado['id'];
    $userid = $dado['userid'];
    $itens = $dado['itens'];
    $version = $dado['version'];
    $ip = $_SESSION['nome_ip'] ;
    $time = time();
    if (isset($_POST["delete$i"])){
        $time_cont = ($version / 1) * 60 + $time;
        $query = "INSERT INTO time (item_id, invade_ip, invade_id, time, start_time, userid, item, verc, action) VALUES ('$id', '$ip', '$meuid', '$time_cont', '$time', '$userid', '$itens', '$version', 'Delete')";
        $result = mysqli_query($conexao, $query);
        header('Location: ../UpDown/index.php');
        exit();
    }
    if (isset($_POST["upload$i"])){
        $invadeip = $_SESSION['web_ip'];
        $query = "SELECT * from usuarios where ip = '$invadeip'";
        $result = mysqli_query($conexao, $query);
        $row = mysqli_num_rows($result);
        if($row > 0){
            $dado = mysqli_fetch_array($result);
            $invade_id = $dado['id'];
            $my_id = $_SESSION['id'];
            $my_ip = $_SESSION['nome_ip'];
            $time_cont = ($version / 1) * 60 + $time;
            $query = "INSERT INTO time (invade_id, invade_ip, item, verc, state, time, start_time, userip, action, userid) VALUES ('$invade_id', '$invadeip', '$itens', '$version', 'off', '$time_cont','$time', '$my_id', 'Upload', '$my_id')";
            $result = mysqli_query($conexao, $query);
            header('Location: ../UpDown/index.php');
            exit();
        }else{
            echo "erro";
        }
    }
}
?>