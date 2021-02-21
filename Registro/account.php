<?php
session_start();
include('../class/users.php');

if(empty($_POST['nick']) || empty($_POST['senha'])){ //checar se tem campos em branco   
    $_SESSION['campos_branco'] = true;
    header('Location: index.php'); // se for para onde vai ser redirecionado
    exit();
 }
 if(empty($_POST['nick']) || empty($_POST['email'])){ //checar se tem campos em branco   
    $_SESSION['campos_branco'] = true;
    header('Location: index.php'); // se for para onde vai ser redirecionado
    exit();
 }
 if($_POST['senha'] != $_POST['confsenha']){
    $_SESSION['senha_conc'] = true;
    header('Location: index.php'); /// senhas são iguais
    exit();
 }
 if($_POST['senha'] == '' || $_POST['confsenha'] == '' ){
    $_SESSION['campos_branco'] = true;
    header('Location: index.php');
    exit();
 }

 $gameIP1 = rand(0, 255);
 $gameIP2 = rand(0, 255);
 $gameIP3 = rand(0, 255);
 $gameIP4 = rand(0, 255);
 
 $gameIP = $gameIP1 . '.' . $gameIP2 . '.' . $gameIP3 . '.' . $gameIP4;
 
 while(true){
     $query_verificar_ip = "select * from usuarios where ip = '$gameIP'";
     $result_verificar_ip = mysqli_query($conexao, $query_verificar_ip);
     $row_verificar_ip = mysqli_num_rows($result_verificar_ip);
 
     if($row_verificar_ip > 0){
         $gameIP1 = rand(0, 255);
         $gameIP2 = rand(0, 255);
         $gameIP3 = rand(0, 255);
         $gameIP4 = rand(0, 255);
 
         $gameIP = $gameIP1 . '.' . $gameIP2 . '.' . $gameIP3 . '.' . $gameIP4;
     }else{
         break;
     }
 }

 
 if(isset($_POST['register'])){
    $usuario = mysqli_real_escape_string($conexao, trim($_POST['nick']));  // criando variavel
    $senha = mysqli_real_escape_string($conexao, trim($_POST['senha']));  // criando variavel
    $email =  mysqli_real_escape_string($conexao, trim($_POST['email']));  // criando variavel
    $cargo = 'user';
    $senhaMD5=MD5($senha);

    $query = "INSERT into usuarios (nick, senha, email, cargo, ip) VALUES ('$usuario', '$senhaMD5', '$email', '$cargo', '$gameIP')"; //consulta com bd

    

    //VERIFICAR SE O EMAIL JA ESTÁ CADASTRADO
    $query_verificar = "select * from usuarios where nick = '$usuario'"; //consulta com bd
    $result_verificar = mysqli_query($conexao, $query_verificar); // juntas os 2
    $row_verificar = mysqli_num_rows($result_verificar); // verificar se existe uma linha

    if($row_verificar > 0){
        $_SESSION['nao_autentificado'] = true;
        header('Location: index.php'); // se for para onde vai ser redirecionado
        exit();
    } //verificar se ja existe o usuario.

    $result = mysqli_query($conexao, $query);
    if($result == ''){
        echo "<script language='javascript' type='text/javascript'>alert('O usuario não foi cadastrado!')</script>";
    }else{
        $_SESSION['cadastrado_socesso'] = true;
        header('Location: ../Home/index.php');
    }

}
?>