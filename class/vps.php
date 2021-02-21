<?php
session_start();


if(isset($_COOKIE['nome'])){
    
    echo 'if';
}else{
    setcookie('nome', 'Alan', time()+3600);
    echo 'else';
}

?>