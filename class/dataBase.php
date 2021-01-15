<?php

class LRSys {
    public $nick;
    public $email;
    private $senha;
    private $id;
    public $ip;

    public function register($regNick, $regPass, $regMail){
        $this->nick = $regNick;
        $this->pass = $regPass;
        $this->email = $regMail;

        require 'users.php';
        require '../Registro/account.php';
        if(isset($_POST['register'])){
                $usuario =  trim($_POST['nick']);  // criando variavel
                $senha = trim($_POST['senha']);  // criando variavel
                $email =  trim($_POST['email']);  // criando variavel
                $cargo = 'user';
                $senhaMD5=MD5($senha);

            $query = "INSERT into usuarios (nick, senha, email, cargo) VALUES ('$usuario', '$senhaMD5', '$email', '$cargo')"; //consulta com bd

        

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
                echo "<script language='javascript' type='text/javascript'>alert('O usuario foi cadastrado com sucesso!')</script>";
            }
        }

    }
}


?>