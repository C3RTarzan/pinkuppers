<?php

$valor = isset($_SESSION['usuario']) ? 'S' : 'N';

if($valor == 'S'){
    header('Location: ../home/index.php');
    exit();
  }


?>