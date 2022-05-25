<?php require_once("config.php"); //connection file

$shoptitle = $_POST['shoptitle'];
$homemenu = $_POST['homemenu'];
$inventory = $_POST['inventory'];
$btnclick = $_POST['btnclick'];
$featuredproducts = $_POST['featuredproducts'];
$latestproducts = $_POST['latestproducts'];
$image = $_POST['image'];
$productname = $_POST['productname'];
$rating = $_POST['rating'];
$price = $_POST['price'];
$btnadd = $_POST['btnadd'];
$exclusive = $_POST['exclusive'];
$names = $_POST['name'];
$description = $_POST['description'];
$btnbuy = $_POST['btnbuy'];

//Database connecction
$conn = new mysqli('locolhost','id17996585_root','Peter18988294%%','id17996585_latest');
if($conn->connect_error){
    die('Connection Failed :'.$conn->connect_error);
}else{
    $stmt = $conn-prepare("insert into products(shoptitle, homemenu, inventory, btnclick, featuredproducts, latestproducts, 
    image, productsname, rating, price, btnadd, exclusive, name, description, btnbuy)
    values(shoptitle, homemenu, inventory, btnclick, featuredproducts, latestproducts, 
    image, productsname, rating, price, btnadd, exclusive, names, description, btnbuy)");
    $stmt=>bind_param("ssssssisiisssss",$shoptitle, $homemenu, $inventory, $btnclick, $featuredproducts, $latestproducts, 
    $image, $productsname, $rating, $price, $btnadd, $exclusive, $names, $description, $btnbuy);
    $stmt->execute();
    echo"added to cart successfully...";
    $stmt=>close();
    $stmt=>close();
}

?>