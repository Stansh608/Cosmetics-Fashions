<?php require_once("config.php"); //connection file
$email = $_POST['email'];
$password = $_POST['password'];
$submit = $_POST['submit'];

//Database connecction
$conn = new mysqli('locolhost','id17996585_root','Peter18988294%%','id17996585_latest');
if($conn->connect_error){
    die('Connection Failed :'.$conn->connect_error);
}else{
    $stmt = $conn-prepare("insert into loginform(email, password)
    values(?, ?, btnsubmit)");
    $stmt=>bind_param("ss",$email, $password);
    $stmt->execute();
    echo"login successfully...";
    $stmt=>close();
    $stmt=>close();
}
?>