<?php 
session_start();
include_once("includes/template_header.php");

if ( isset( $_GET['total']) && ($_GET['total'] > 0 ) && (!empty($_SESSION['cart'])))

{
require ( '../connect_db.php' ) ;

$fname = $_POST['f_name'];
$lname = $_POST['l_name'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$address = $_POST['address'];
$postcode = $_POST['postcode'];
$country = $_POST['country'];
 

$q = "INSERT INTO customer (f_name, l_name, email, telephone, address, postcode, country, date_added)
		VALUES ('$fname', '$lname', '$email', '$telephone', '$address', '$postcode', '$country', NOW())";
$r = mysqli_query ( $dbc, $q );
$customer_id = mysqli_insert_id( $dbc );

$q = "INSERT INTO customerorders ( total, date_added, user_id ) VALUES (".$_GET['total'].", NOW(), ".$customer_id.")";

$r = mysqli_query ( $dbc, $q );
$order_id = mysqli_insert_id( $dbc );

$q = "SELECT * FROM products WHERE id IN (" ;
foreach ( $_SESSION['cart'] as $id => $value )
{ $q .= $id . ',' ;}
$q = substr( $q, 0, -1) . ') ORDER BY id ASC';
$r = mysqli_query ($dbc, $q);

while ( $row = mysqli_fetch_array ( $r, MYSQLI_ASSOC))
{
$query = "INSERT INTO ordercontents (order_id, product_id, quantity, price) VALUES ( $order_id, ".$row['id'].",".
$_SESSION['cart'][$row['id']]['quantity'].",".
$_SESSION['cart'][$row['id']]['price'].")";
$result = mysqli_query ($dbc, $query);
}


//$q = "UPDATE products SET stock_level = stock_level - 1 WHERE id = '$id'";
//$result = mysqli_query ($dbc, $query);

mysqli_close ($dbc);

echo "<p> Thanks for your order. Your order number is: ".$order_id."</p>";
$_SESSION['cart'] = NULL;
}
else
{echo '<p>There are no items in your cart.</p>';}

		?> 

<?php
include_once("includes/template_footer.php");
?>