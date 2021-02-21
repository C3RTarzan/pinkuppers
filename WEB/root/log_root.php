<?php
session_start();
include('../../class/users.php');
include '../../class/rootlog.php';
$id = $_SESSION['id'];
$_SESSION['log_help'] = '';

$cdgst = trim( $_POST['barra'] );
$cdgstd = substr($cdgst, 8);
$cdg = strtoupper($cdgst);
$log = $_SESSION['log'];
$inv_id = $_SESSION['inv_id'];

if( $cdg == 'CLEAR' || $cdg == 'LIMPAR'){
    $_SESSION['inv_log_root'] = 'Digite -help para ajuda...
';
    header('Location: index.php');
    die();
}
if( $cdg == 'HELP' || $cdg == '-HELP' || $cdg == 'AJUDA'){
    $_SESSION['log_help_root'] = '
-------------------
- clear    //Limpar log
- prog    //Listar seus programas
- log    //Ir para o log
- exit    //Sair
-r    //Renomear
-f    //Deletar
-a    //Ativar seu programa
-d    //Desativar seu programa
-u    //Fazer Upload
';
    header('Location: index.php');
    die();
}

if ($cdg =='PROG'){
    $query = "select * from software where userid = '$inv_id'";
    $result = mysqli_query($conexao, $query);
    $quantia = mysqli_num_rows($result);

    for($i = 0; $i< $quantia; $i++){
        $dado = mysqli_fetch_array($result);
        $itens = $dado["itens"];
        $verc = $dado["version"];
        $log = $_SESSION['inv_log_root'];
        $_SESSION['inv_log_root'] = "$log
$itens $verc
";
    }
    header('Location: index.php');
        die();
}

if ($cdg =='PROG -F'){
    $msg = "prog -d nome do programa que deseja apagar.
";
    $log = $_SESSION['inv_log_root'];
    $_SESSION['inv_log_root'] = "$log
$msg ";
    header('Location: index.php');
    die();
}


if (str_starts_with($cdg, 'PROG -F')){
    $cdg = substr($cdg, 8);
    $query = "select * from software where userid = '$inv_id'";
    $result = mysqli_query($conexao, $query);
    $quantia = mysqli_num_rows($result);
    for($i = 0; $i< $quantia; $i++){
        $dado = mysqli_fetch_array($result);
        $itens = $dado["itens"];
        $itens = strtoupper($itens);
        if($itens == $cdg){
            $query = "DELETE FROM software WHERE userid = '$inv_id' and itens = '$cdgstd'";
            $result = mysqli_query($conexao, $query);
            $itens = "Programa '$cdgstd' deletado.";
            $log = $_SESSION['inv_log_root'];
            $_SESSION['inv_log_root'] = "$log
$itens
"; 
            header('Location: index.php');
            die();
        }
    }
    $itens = "Programa '$cdgstd' não reconhecido.
";
    $log = $_SESSION['inv_log_root'];
    $_SESSION['inv_log_root'] = "$log
$itens";   
    header('Location: index.php');
    die(); 
}
/*----------------------*/
if ($cdg =='PROG -U'){
    $msg = "prog -d nome do programa que deseja baixar.
";
    $log = $_SESSION['inv_log_root'];
    $_SESSION['inv_log_root'] = "$log
$msg ";
    header('Location: index.php');
    die();
}

if (str_starts_with($cdg, 'PROG -U')){
    $cdg = substr($cdg, 8);
    $query = "select * from software where userid = '$inv_id'";
    $result = mysqli_query($conexao, $query);
    $quantia = mysqli_num_rows($result);
    for($i = 0; $i< $quantia; $i++){
        $dado = mysqli_fetch_array($result);
        $itens_pri = $dado["itens"];
        $version = $dado["version"];
        $itens = strtoupper($itens_pri);
        if($itens == $cdg){
            $query = "INSERT INTO software (itens, version, userid) VALUES ('$itens_pri', '$version', '$id')";
            $result = mysqli_query($conexao, $query);
            $itens = "Programa '$cdgstd' baixado.";
            $log = $_SESSION['inv_log_root'];
            $_SESSION['inv_log_root'] = "$log
$itens
"; 
            header('Location: index.php');
            die();
        }
    }
    $itens = "Programa '$cdgstd' não reconhecido.
";
    $log = $_SESSION['inv_log_root'];
    $_SESSION['inv_log_root'] = "$log
$itens";   
    header('Location: index.php');
    die(); 
}
/*--------------------*/

if( $cdg == 'EXIT' ){
    $_SESSION['web_root'] = false;
    header('Location: ../index.php');
    die();
}

if( $cdg == 'LOG' ){
    $log = $_SESSION['inv_log'];
    $_SESSION['inv_log_root'] = "$log
";
    header('Location: index.php');
    die();
}
if( $cdg == 'LOG -F' ){
    $valor = 'Digite -help para ajuda...';
    $query = "UPDATE log SET log = '$valor' WHERE userid = '$inv_id'";
    $result = mysqli_query($conexao, $query);
    $log = $_SESSION['inv_log_root'];
    $_SESSION['inv_log_root'] = "$log
Log apagado.";
    header('Location: index.php');
    die();
}

$itens = "'$cdgst' não é reconhecido como um comando.
";
$log = $_SESSION['inv_log_root'];
$_SESSION['inv_log_root'] = "$log
$itens";
header('Location: index.php');

?>




?>