<?php
session_start();
include('../class/users.php');

$query = "SELECT * from software";
$result = mysqli_query($conexao, $query);
$row = mysqli_num_rows($result);

for($i = 0; $i < $row; $i++){
    $dado = mysqli_fetch_array($result);
    $id = $dado['id'];
    $userid = $dado['userid'];
    $itens = $dado['itens'];
    $version = $dado['version'];
    $ip = $dado['userip'];
    if (isset($_POST["delete$i"])){
        $query = "DELETE FROM software WHERE id = '$id'";
        $result = mysqli_query($conexao, $query);
        header('Location: index.php');
        exit();
    }
    if (isset($_POST["upload$i"])){
        if (isset($_SESSION['web_ip'])){
            $_SESSION['time_upload'] = true;
            $_SESSION['time_upload_sec'] = time() + 120;
            // $ip = $_SESSION['web_ip'];
            // $query = "SELECT * from usuarios WHERE ip = '$ip'";
            // $result = mysqli_query($conexao, $query);
            // $dado = mysqli_fetch_array($result);
            // $id = $dado['id'];
            // $state = "off";
            // $query = "INSERT INTO software (userid, userip, itens, version, state) VALUES ('$id', '$ip', '$itens', '$version', '$state')";
            // $result = mysqli_query($conexao, $query);
            header('Location: ../class/counter.php');
            exit();
        }
        echo "erro";
    }
}
?>