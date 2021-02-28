<?php
include('../class/users.php');
$id_session = $_SESSION['id'];
$query = "SELECT * FROM time where userid = '$id_session'";
$result = mysqli_query($conexao, $query); // juntas os 2
$row = mysqli_num_rows($result); // verificar se existe uma linha

$time_now = time();

for($i = 0; $i < $row; $i++){
    $dado = mysqli_fetch_array($result); // extrair dados da tabela sql
    $id = $dado['id'];
    $userid = $dado['userid'];
    $userip = $dado['userip'];
    $time = $dado['time'];
    $item = $dado['item'];
    $verc = $dado['verc'];
    $invade_ip = $dado['invade_ip'];
    $action = $dado['action'];
    $id_item = $dado['item_id'];
    // ===================
    $_SESSION['time_id'] = $id;
    $_SESSION['time_id_item'] = $id_item;
    $_SESSION['time_item'] = $item;
    $_SESSION['time_verc_item'] = $verc;
    $_SESSION['time_inv_ip_item'] = $invade_ip;
    $_SESSION['time_action_item'] = $action;
    $_SESSION['time_user_ip_item'] = $userip;
    $_SESSION['time_user_id_item'] = $userid;

    if($time_now > $time){
        $_SESSION['time_ok'] = true;
        break;
    }
    
}
if(isset($_SESSION['time_ok'])){
    $id = $_SESSION['time_id'];
    $item = $_SESSION['time_item'];
    $verc = $_SESSION['time_verc_item'];
    $invade_ip = $_SESSION['time_inv_ip_item'];
    $action = $_SESSION['time_action_item'];
    $userip = $_SESSION['time_user_ip_item'];
    $userid = $_SESSION['time_user_id_item'];
    $id_item = $_SESSION['time_id_item'];

    if($action == "down"){
        $query = "INSERT INTO software (userid, userip, itens, version, state) VALUES ('$userid', '$userip', '$item', '$verc', 'off')";
        $result = mysqli_query($conexao, $query);
    }
    if($action == "submit"){
        // $query = "INSERT INTO software (userid, userip, itens, version, state) VALUES ('$userid', '$userip', '$item', '$verc', 'off')";
        // $result = mysqli_query($conexao, $query);
    }
    if($action == "delete"){ 
        $query = "DELETE FROM software WHERE id='$id_item'";
        $result = mysqli_query($conexao, $query);
    }
    if($action == "activate"){

    }
    if($action == "stop"){

    }
    $query = "DELETE FROM time WHERE id = '$id'";
    $result = mysqli_query($conexao, $query); // juntas os 2
    unset($_SESSION['time_ok']);
}
?>