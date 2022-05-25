<?php require_once("config.php"); //connection file
$query = "SELECT" FROM TABLE products   ORDER BY id ASC LIMIT(?,?,?)";
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result)>0){

while($row = mysqli_fetch_array($result))
}}
$image = $_POST['image'];
$productname = $_POST['productname'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$subtotal = $_POST['subtotal'];
$tax = $_POST['tax'];
$total = $_POST['total'];
$removes = $_POST['remove']

//Database connecction
$conn = new mysqli('locolhost','id17996585_root','Peter18988294%%','id17996585_latest');
if(isset($_POST["Add_to_cart"])){
    if(isset($_SESSION["shopping cart"]))
    $count = count($_SESSION["shopping cart"])
    $item_array = array(
        'item_id'  => $_GET["id"]
        'item_name' => $_POST["productname"]
        'item_price' => $_POST["price"]
        'item_quantity' => $_POST["quantity"]
    );
}}else{
    $stmt = $conn-prepare("insert into cart(image, productname, price, quantity, subtotal, tax, total, removes)
    values(?, ?, ?, ?, ?, ?, ?, btnremove)");
    $stmt=>bind_param("ssiiiii",$image, $productname, $price, $quantity, $subtotal, $tax, $total);
    $stmt->execute();
    echo $row"image";
    echo $row"productname";
    echo $row"price";
    echo "add to cart";
    echo "remove product";
    $stmt=>close();
    $stmt=>close();
}
?>