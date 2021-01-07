<?php
//session_start();
if(!$_SESSION['usuario']){
    header('Location: ../Login/index.php');
    exit();
}
?>