<?php
session_start();
include('../../class/users.php');
$_SESSION['web_root'] = false;
header('Location: ../index.php');

?>