<?php
$id_session = $_SESSION['id'];
$query = "SELECT * FROM time where userid = '$id_session'";
$result = mysqli_query($conexao, $query); // juntas os 2
$row = mysqli_num_rows($result); // verificar se existe uma linha

$time_now = time();

for($i = 0; $i < $row; $i++){
    $dado = mysqli_fetch_array($result); // extrair dados da tabela sql
    $_SESSION['time_id'] = $dado['id'];
    $_SESSION['time_user_id_item'] = $dado['userid'];
    $_SESSION['time_user_ip_item'] = $dado['userip'];
    $time = $dado['time'];
    $_SESSION['time_item'] = $dado['item'];
    $_SESSION['time_verc_item'] = $dado['verc'];
    $_SESSION['time_inv_ip_item'] = $dado['invade_ip'];
    $_SESSION['time_inv_id_item'] = $dado['invade_id'];
    $_SESSION['time_action_item'] = $dado['action'];
    $_SESSION['time_id_item'] = $dado['item_id'];
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
    $invade_id = $_SESSION['time_inv_id_item'];
    $action = $_SESSION['time_action_item'];
    $userip = $_SESSION['time_user_ip_item'];
    $userid = $_SESSION['time_user_id_item'];
    $id_item = $_SESSION['time_id_item'];

    if($action == "Download"){
        // $query = "INSERT INTO software (userid, userip, itens, version, state) VALUES ('$userid', '$userip', '$item', '$verc', 'off')";
        // $result = mysqli_query($conexao, $query);
    }
    if($action == "Upload"){
        $invadeip = $_SESSION['web_ip'];
        $query = "INSERT INTO software (userid, userip, itens, version, state) VALUES ('$invade_id', '$invadeip', '$item', '$verc', 'off')";
        $result = mysqli_query($conexao, $query);
    }
    if($action == "Delete"){ 
        $query = "DELETE FROM software WHERE id='$id_item' and userid = '$invade_id'";
        $result = mysqli_query($conexao, $query);
    }
    if($action == "Activate"){

    }
    if($action == "Stop"){

    }
    $query = "DELETE FROM time WHERE id = '$id'";
    $result = mysqli_query($conexao, $query); // juntas os 2
    unset($_SESSION['time_ok']);
}
?>