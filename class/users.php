<?php
class Users{

    private $pdo;
    public $msgErro = "";

    public function conectar($nome, $host, $user, $senha){
        global $pdo;
        try{
            $pdo = new PDO("mysql:host=".$host.";nome".$nome.$user,$senha);
        } catch(PDOException $e){
            global $msgErro;
            $msgErro = $e->getMessage();
        }
    }

    public function cadastrar($nick,$email,$senha){
        global $pdo;
        $senhaMD5=MD5($senha);
        //verificar se ja está cadastrado.
        $sql = $pdo->prepare("SELECT id_user FROM usuarion WHERE nick = '$nick'");
        $sql->execute();    
        if($sql->rowCount() > 0){
            return false; //ja esta cadastrada
        }else{
            //caso nao, cadastro.
            $sql = $pdo->prepare("INSERT INTO usuarion(nick, email, senha) VALUES ('$nick', '$email', '$senhaMD5')");
            $sql->execute();
            return true;
        }
    }
    public function logar($nick, $senha){
        global $pdo;
        $senhaMD5=MD5($senha);
        //verificar se esta cadastrado
        $sql = $pdo->prepare("SELECT id_user FROM usuarion WHERE nick = '$nick' AND senha = '$senhaMD5'");
        $sql->execute();
        if($sql->rowCont() > 0){
            //esta cadastrado(sessan)
            $dado = $sql->fetch();
            session_start();
            $_SESSION['usuarion'] = $dado['id_user'];
            return true; //cadastrada entao foi logada
        }else{
            return false; //n foi possivel logar
        }
    }
}
?>