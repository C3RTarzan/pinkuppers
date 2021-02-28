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
        echo "<span class='itn'>";
        echo $itens;
        echo "</span>";
        // --------------
        echo "<span class='sp'>";
        echo $version;
        echo "</span>";
        // --------------
        echo "<span class='btc$i'>";
        echo "<form class='execut$i' method='POST' action='func.php'>";
        echo "<button class='btc_execut' name='execut$i'><i  class='fas fa-play-circle'></i></button>";
        echo "</form>";
        echo "</span>";
        // --------------
        echo "<span class='btc$i'>";
        echo "<form class='edit$i' method='POST' action='func.php'>";
        echo "<button class='btc_edit' name='edit$i'><i  class='fas fa-pencil-alt'></i></button>";
        echo "</form>";
        echo "</span>";
        // --------------
        echo "<span class='btc$i'>";
        echo "<form class='delete$i' method='POST' action='func.php'>";
        echo "<button class='btc_delete' name='delete$i'><i  class='fas fa-minus-circle'></i></button>";
        echo "</form>";
        echo "</span>";
        // --------------
        echo "<span class='btc$i'>";
        echo "<form class='upload$i' method='POST' action='func.php'>";
        echo "<button class='btc_upload' name='upload$i'><i  class='fas fa-upload'></i></button>";
        echo "</form>";
        echo "</span>";
        // --------------
        // echo "<span class='btc$i'>";
        // echo "<form class='download' method='POST' action='func.php'>";
        // echo "<button name='download'><i  class='fas fa-download'></i></button>";
        // echo "</form>";
        // echo "</span>";
        // --------------
        echo "</div>";
        $vali = false;
        
    }else{
        echo "<div class='ts2'>";
        echo "<span class='itn'>";
        echo $itens;
        echo "</span>";
        echo "<span class='sp'>";
        echo $version;
        echo "</span>";
         // --------------
        echo "<span class='btc$i'>";
        echo "<form class='execut$i' method='POST' action='func.php'>";
        echo "<button class='btc_execut' name='execut$i'><i  class='fas fa-play-circle'></i></button>";
        echo "</form>";
        echo "</span>";
        // --------------
        echo "<span class='btc$i'>";
        echo "<form class='edit' method='POST' action='func.php'>";
        echo "<button class='btc_edit' name='edit'><i  class='fas fa-pencil-alt'></i></button>";
        echo "</form>";
        echo "</span>";
        // --------------
        echo "<span class='btc$i'>";
        echo "<form class='delete$i' method='POST' action='func.php'>";
        echo "<button class='btc_delete' name='delete$i'><i class='fas fa-minus-circle'></i></button>";
        echo "</form>";
        echo "</span>";
        // --------------
        echo "<span class='btc$i'>";
        echo "<form class='upload$i' method='POST' action='func.php'>";
        echo "<button class='btc_upload' name='upload$i'><i  class='fas fa-upload'></i></button>";
        echo "</form>";
        echo "</span>";
        // --------------
        // echo "<span class='btc$i'>";
        // echo "<form class='download' method='POST' action='func.php'>";
        // echo "<button name='download'><i  class='fas fa-download'></i></button>";
        // echo "</form>";
        // echo "</span>";
        // --------------
        echo "</div>";
        $vali = true;
    }
}






?>