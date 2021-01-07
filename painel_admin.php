<?php
session_start();
include('verificar_login.php');

  if($_SESSION['nome_cargo'] != 'admin'){
    header('Location: logout.php');
    exit();
  }
?>


Painel ADM

<h3> Usuário: <?php echo $_SESSION['nome_usuario']; ?> </h3>
<h3> Cargo: <?php echo $_SESSION['nome_cargo']; ?> </h3>
<h3> E-mail: <?php echo $_SESSION['nome_email']; ?> </h3>
<a href="logout.php">Sair</a>