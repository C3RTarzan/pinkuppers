<?php
if(isset($_SESSION['time_id_item'])){
    $id = $_SESSION['time_id_item'];
    $item = $_SESSION['time_item'];
    $verc = $_SESSION['time_verc_item'];
    $invade_ip = $_SESSION['time_inv_ip_item'];
    $action = $_SESSION['time_action_item'];
    $userip = $_SESSION['time_user_ip_item'];
    $userid = $_SESSION['time_user_id_item'];

    $query = "DELETE FROM time WHERE id = '$id'";
    $result = mysqli_query($conexao, $query); // juntas os 2
    unset($_SESSION['time_id_item']);

    if($action = "down"){
        $query = "INSERT INTO software (userid, userip, itens, version, state) VALUES ('$userid', '$userip', '$item', '$verc', 'off')";
        $result = mysqli_query($conexao, $query);
    }
    if($action = "up"){

    }
    if($action = "delete"){

    }
    if($action = "activate"){

    }
    if($action = "stop"){

    }
}
?>