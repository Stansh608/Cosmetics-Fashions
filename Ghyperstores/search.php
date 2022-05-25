<?php require_once("config.php"); //connection file

//Database connecction
$conn = new mysqli('locolhost','id17996585_root','Peter18988294%%','id17996585_latest');

if(isset($_POST["submit"])){
    $str = $_POST["search"];
    $sth = $con->prepare("SELECT FROM 'search' WHERE name ='$str'");

    $sth->setFetchMode(PDO:: FETCH_c0);
    $sth->execute();
    echo"name...";
    echo"description...";
}

?>