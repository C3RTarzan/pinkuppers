<?php
include('../class/users.php');

$id = $_SESSION['id'];
$vali = true;

$query = "select * from software where userid = '$id'";
$result = mysqli_query($conexao, $query);
$quantia = mysqli_num_rows($result);

for($i = 0; $i< $quantia; $i++){
    $dado = mysqli_fetch_array($result);
    $itens = $dado["itens"];
    $version = $dado["version"];
    $cont[$i] = $i;
    if($vali == true){
        echo "<div class='ts'>";
        // --------------
        echo "<span>";
        echo $itens;
        echo "</span>";
        // --------------
        echo "<span class='sp'>";
        echo $version;
        echo "</span>";
        // --------------
        echo "<span class='btc1'>";
        echo "<form class='edit' method='POST' action='func.php'>";
        echo "<button name='edit'><i  class='fas fa-pencil-alt'></i></button>";
        echo "</form>";
        echo "</span>";
        // --------------
        echo "<span class='btc2'>";
        echo "<form class='delete' method='POST' action='func.php'>";
        echo "<button name='edit'><i  class='fas fa-minus-circle'></i></button>";
        echo "</form>";
        echo "</span>";
        // --------------
        echo "<span class='btc3'>";
        echo "<form class='upload' method='POST' action='func.php'>";
        echo "<button name='edit'><i  class='fas fa-upload'></i></button>";
        echo "</form>";
        echo "</span>";
        // --------------
        echo "<span class='btc4'>";
        echo "<form class='execut' method='POST' action='func.php'>";
        echo "<button name='edit'><i  class='fas fa-download'></i></button>";
        echo "</form>";
        echo "</span>";
        // --------------
        echo "</div>";
        $vali = false;
        
    }else{
        echo "<div class='ts2'>";
        echo "<span>";
        echo $itens;
        echo "</span>";
        echo "<span class='sp'>";
        echo $version;
        echo "</span>";
         // --------------
         echo "<span class='btc1'>";
         echo "<form class='edit' method='POST' action='func.php'>";
         echo "<button name='edit'><i  class='fas fa-pencil-alt'></i></button>";
         echo "</form>";
         echo "</span>";
         // --------------
         echo "<span class='btc2'>";
         echo "<form class='delete' method='POST' action='func.php'>";
         echo "<button name='edit'><i  class='fas fa-minus-circle'></i></button>";
         echo "</form>";
         echo "</span>";
         // --------------
         echo "<span class='btc3'>";
         echo "<form class='upload' method='POST' action='func.php'>";
         echo "<button name='edit'><i  class='fas fa-upload'></i></button>";
         echo "</form>";
         echo "</span>";
         // --------------
         echo "<span class='btc4'>";
         echo "<form class='execut' method='POST' action='func.php'>";
         echo "<button name='edit'><i  class='fas fa-download'></i></button>";
         echo "</form>";
         echo "</span>";
         // --------------
        echo "</div>";
        $vali = true;
    }
}






?>