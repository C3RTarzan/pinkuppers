<?php

define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', '');
define('BD', 'account');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, BD) or die ('Não Conectou!!');

?>