<?php
if(!isset($_SESSION)){
    session_start();
}
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
    $start_time = $dado['start_time'];
    $time = $dado['time'];
    $item = $dado['item'];
    $verc = $dado['verc'];
    $invade_ip = $dado['invade_ip'];
    $action = $dado['action'];
    $contPorc = round(($time_now - $start_time) * 100 / ($time - $start_time), 0);
    $cont_time = ($time - $time_now);
    if($cont_time < 60){
        $count =  date('s', ($time - $time_now));
    }
    else if($cont_time < 3600){
        $count =  date('i:s', ($time - $time_now));
    }
    else if($cont_time < 3600){
        $count =  date('i:s', ($time - $time_now));
    }else{
        $count =  date('H:i:s', ($time - $time_now));
    }
    if($time_now <= $time){
        echo "<div class='filho'>";
        echo "<div class='barra-fora'>";
        echo "<div class='barra-dentro'><style>#section #pai .filho .barra-dentro{ width: $contPorc%; }</style><span>$contPorc%</span></div>";
        echo "</div>";
        echo "<div class='time'>";
        echo "<span>$count</span>";
        echo "</div>";
        echo "<div class='info'>";
        echo "<span>$item $verc</span>";
        echo "<span>$action</span>";
        echo "<span>$invade_ip</span>";
        echo "</div>";
        echo "</div>";
    }else if($time_now > $time){
        $_SESSION['time_id_item'] = $id;
        $_SESSION['time_item'] = $item;
        $_SESSION['time_verc_item'] = $verc;
        $_SESSION['time_inv_ip_item'] = $invade_ip;
        $_SESSION['time_action_item'] = $action;
        $_SESSION['time_user_ip_item'] = $userip;
        $_SESSION['time_user_id_item'] = $userid;
        $_SESSION['time_ok'] = true;
        break;
    }
    
}
if(isset($_SESSION['time_ok'])){
    include '../class/time.php';
}

?>