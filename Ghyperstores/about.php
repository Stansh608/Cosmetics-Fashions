<?php require_once("config.php"); //connection file
$content = $_POST['content'];
$mission = $_POST['mission'];
$vision = $_POST['vision'];
$purpose = $_POST['purpose'];
$readmore = $_POST['readmore'];
$social = $_POST['social'];
$image = $_POST['image'];
$mobileapp = $_POST['mobileapp'];

//Database connecction
$conn = new mysqli('locolhost','id17996585_root','Peter18988294%%','id17996585_latest');
if($conn->connect_error){
    die('Connection Failed :'.$conn->connect_error);
}else{
    $stmt = $conn-prepare("insert into about-us(mission, vision, purpose, readmore, mobileapp)
    values(mission, vision, purpose, readmore, mobileapp)");
    $stmt=>bind_param("ttttt",$mission, $vision, $purpose, $readmore,$mobileapp);
    $stmt->execute();
    echo"mission...";
    echo"vision...";
    echo"purpose...";
    echo"readmore...";
    echo"mobileapp...";
    $stmt=>close();
    $stmt=>close();
}
?>