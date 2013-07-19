<?php
session_start();
include_once("includes/template_header.php");

if ( $_SERVER['REQUEST_METHOD'] == 'POST')
{
	foreach ( $_POST['qty'] as $item_id => $item_qty)
	{
		$id = $item_id;
		$qty = $item_qty;
		
		if( $qty == 0)
		{unset ( $_SESSION['cart'][$id] );}
		elseif ($qty > 0)
		{ $_SESSION['cart'][$id]['quantity'] = $qty ; }
	}
}

$total = 0;

if (!empty($_SESSION['cart']))
{
	require ( '../connect_db.php' ) ;
	
	$q = "SELECT * FROM products WHERE id IN (";
	foreach ( $_SESSION['cart'] as $id => $value )
	{ $q .= $id . ','; }
	$q = substr( $q, 0, -1 ) . ') ORDER BY id ASC' ;
	$r = mysqli_query ($dbc, $q);
	
echo '<form action="cart.php" method="POST"><table>
<tr><h5><th colspan="5">Items in your cart</th></h5></tr>
<tr><h5><th>Item</th><th>Description</th><th>Qty</th><th>Sub total</th><th>Total</th></h5>';
while ( $row = mysqli_fetch_array ($r, MYSQLI_ASSOC))
{
//Calculate sub-totals and grand totals.
$subtotal = $_SESSION['cart'][$row['id']]['quantity'] * $_SESSION['cart'][$row['id']]['price'];
$total += $subtotal;
	
echo "<tr><h5> <td>{$row['product_title']}</td></h5>
<h5><td>{$row['product_details']}</td></h5>
<h5><td><input type=\"text\" size=\"3\"
name=\"qty[{$row['id']}]\"
value=\"{$_SESSION['cart'][$row['id']]['quantity']}\"></td></h5>
<h5><td>£{$row['product_price']} </td></h5>
<h5><td>£".number_format ( $subtotal, 2 )." </td></h5></tr>";
}

echo ' <h5><tr><td colspan="5">
Total = '.number_format ( $total, 2 ).'</td></tr></h5>
</table>
<input type="submit" value="Update My Cart">
</form>';

mysqli_close( $dbc );


}
else
{
echo '<h5> Your cart is currently empty.</h5>';
}

echo '<h5><a href="index.php">Continue shopping</a></h5>';


//echo '<h5><a href="checkout.php?total='.$total.'">Checkout</a></h5>';

echo '<h5><a href="#" onclick="checkoutForm('.$total.'); return false;">Go to checkout</a></h5>
<div id="checkoutform"></div>'

?> 
		



		
<?php
include_once("includes/template_footer.php");
?>