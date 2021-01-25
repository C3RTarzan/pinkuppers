<?php
session_start();
include('../class/users.php');

//$ipweb = mysqli_real_escape_string($conexao, $_POST['ipweb']);  
$valor = mysqli_real_escape_string($conexao, $_POST['ipweb']); 
$ar1 = array(".");
$ar2 = array("");
$tratado = str_replace($ar1, $ar2, $valor);

if(is_numeric($tratado)){
    $_SESSION['web_ip'] = $valor;
    header('Location: index.php');
    echo "foi";
}else{
    echo "n foi";
    header('Location: index.php');
}
?>