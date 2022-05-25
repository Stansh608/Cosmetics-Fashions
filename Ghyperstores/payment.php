<?php require_once("config.php"); //connection file
$fullname = $_POST['fullname'];
$cardname = $_POST['cardname'];
$email = $_POST['email'];
$address = $_POST['address'];
$city = $_POST['city'];
$datebirth = $_POST['datebirth'];
$month = $_POST['month'];
$year = $_POST['year'];
$b1 = $_POST['b1'];
$b2 = $_POST['b2'];
$bc1 = $_POST['bc1'];
$bc2 = $_POST['bc2'];
$bc3 = $_POST['bc3'];
$cardnumber = $_POST['cardnumber'];
$cardcvc = $_POST['cardcvc'];
$numberl = $_POST['numberl'];
$expmonth = $_POST['expmonth'];
$expyear = $_POST['expyear'];
$amount = $_POST['amount'];

//Database connecction
$conn = new mysqli('locolhost','id17996585_root','Peter18988294%%','id17996585_latest');
if($conn->connect_error){
    die('Connection Failed :'.$conn->connect_error);
}else{
    $stmt = $conn-prepare("insert into payment(fullname, cardname, email, address, city, datebirth, month, year,
     cardnumber, cardcvc,number, expmonth, expyear, amount)
    values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt=>bind_param("sssssssiiiisii",$fullname, $cardname, $email, $address, $city, $datebirth, $month, $year, 
    $cardnumber, $cardcvc, $numberl, $expmonth, $expyear, $amount);
    $stmt->execute();
    echo"transaction successfully...";
    $stmt=>close();
    $stmt=>close();
}
?>