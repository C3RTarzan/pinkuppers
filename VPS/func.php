<?php
session_start();
include('../class/users.php');

$cdgst = trim ( $_POST['barra'] );
$cdgstd = substr($cdgst, 8);
$cdg = strtoupper($cdgst);
$id = $_SESSION['id'];


if( $cdg == 'HELP' || $cdg == '-HELP' || $cdg == 'AJUDA'){
    $log = $_SESSION['log_vps'];
    $msg = ' 
-------------------
- clear    //Limpar log
- prog    //Listar seus programas
-r    //Renomear
-f    //Deletar seu programa
-a    //Ativar seu programa
-d    //Desativar seu programa
-------------------
';
    $_SESSION['log_vps'] = "$log $msg";
    header('Location: index.php');
    die();
}
if( $cdg == 'CLEAR' || $cdg == '-CLEAR' || $cdg == 'LIMPAR'){
    $_SESSION['log_vps'] = 'Digite -help para ajuda...
';
    header('Location: index.php');
    die();
}
if ($cdg =='PROG'){
    $query = "select * from software where userid = '$id'";
    $result = mysqli_query($conexao, $query);
    $quantia = mysqli_num_rows($result);

    for($i = 0; $i< $quantia; $i++){
        $dado = mysqli_fetch_array($result);
        $itens = $dado["itens"];
        $verc = $dado["version"];
        $log = $_SESSION['log_vps'];
        $_SESSION['log_vps'] = "$log
$itens $verc
";
    }
    header('Location: index.php');
        die();
}

if ($cdg =='PROG -D'){
    $msg = "prog -d nome do programa que deseja apagar.";
    $log = $_SESSION['log_vps'];
    $_SESSION['log_vps'] = "$log
$msg ";
    header('Location: index.php');
    die();
}

if (str_starts_with($cdg, 'PROG -D')){
    $cdg = substr($cdg, 8);
    $query = "select * from software where userid = '$id'";
    $result = mysqli_query($conexao, $query);
    $quantia = mysqli_num_rows($result);
    for($i = 0; $i< $quantia; $i++){
        $dado = mysqli_fetch_array($result);
        $itens = $dado["itens"];
        $itens = strtoupper($itens);
        if($itens == $cdg){
            $query = "DELETE FROM software WHERE userid = '$id' and itens = '$cdgstd'";
            $result = mysqli_query($conexao, $query);
            $itens = "Programa '$cdgstd' deletado.";
            $log = $_SESSION['log_vps'];
            $_SESSION['log_vps'] = "$log
$itens
"; 
            header('Location: index.php');
            die();
        }
    }
    $itens = "Programa '$cdgstd' não reconhecido.
";
    $log = $_SESSION['log_vps'];
    $_SESSION['log_vps'] = "$log
$itens";   
    header('Location: index.php');
    die(); 
}

$itens = "'$cdgst' não é reconhecido como um comando.
";
$log = $_SESSION['log_vps'];
$_SESSION['log_vps'] = "$log
$itens";
header('Location: index.php');

?>