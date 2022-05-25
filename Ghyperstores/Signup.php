<?php require_once("config.php"); //connection file
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$passwrd = $_POST['passwrd'];
$confirmPassword = $_POST['confirmPassword'];

//Database connecction
$conn = new mysqli('locolhost','id17996585_root','Peter18988294%%','id17996585_latest');
if($conn->connect_error){
    die('Connection Failed :'.$conn->connect_error);
}else{
    $stmt = $conn-prepare("insert into signup(firstName, lastName, email, passwrd, confirmPassword)
    values(?, ?, ?, ?, ?)");
    $stmt=>bind_param("sssss",$firstName, $lastName, $email, $password, $confirmPassword);
    $stmt->execute();
    echo"signup successfully...";
    $stmt=>close();
    $stmt=>close();
}
?>