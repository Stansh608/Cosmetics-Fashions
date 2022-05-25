<?php require_once("config.php"); //connection file
$pname = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$psubject = $_POST['subject'];
$pmessage = $_POST['message'];
$sends = $_POST['sends'];
$reachus = $_POST['reachus'];

//Database connecction
$conn = new mysqli('locolhost','id17996585_root','Peter18988294%%','id17996585_latest');
if($conn->connect_error){
    die('Connection Failed :'.$conn->connect_error);
}else{
    $stmt = $conn-prepare("insert into contact(pname, phone, email, psubject, pmessage, sends, reachus)
    values(?, ?, ?, ?, ?, btnsend, reachus(email,phone, adress,facebook,twitter,instagram))");
    $stmt=>bind_param("sssss",$pname, $phone, $email, $psubject, $pmessage);
    $stmt->execute();
    echo"message sent successfully...";
    $stmt=>close();
    $stmt=>close();
}
?>