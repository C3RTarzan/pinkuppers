<?php

    require_once '../class/users.php';
    $u = new Users();

    //verificar se clicou
    
    if (isset($_POST['nick'])) {                
        $nick = addslashes($_POST['nick']);
        $email = addslashes($_POST['email']);
        $senha = addslashes($_POST['senha']);
        $confsenha = addslashes($_POST['confsenha']);
        //verificar se não esta vazio
        
        if(!empty($nick) && !empty($email) && !empty($senha) && !empty($confsenha)){
            $u->conectar("login", "localhost", "root", "");//modificar        
            if($u->msgErro == ""){ // n deu erro
                if($senha == $confsenha) {     
                    if($u->cadastrar($nick,$email,$senha))
                    {
                        echo "<script language='javascript' type='text/javascript'>alert('O usuario foi cadastrado com sucesso!')</script>";
                        echo "<script language='javascript' type='text/javascript'>window.location.href='login.html'</script>";
                    }else
                    {
                        echo "E-mail já cadastrado!";
                        
                    }
                }else
                {
                    echo "Senha e Confirmar senha não correspondem.";
                    
                }
                
            }else{
                echo "Erro: ".$u->msgErro;
                
            }
        }else
        {
            echo "Verifique se todos os campos esão preenchidos corretamente.";
            
        }
    }
    
?>