<?php # DISPLAY SHOPPING CART ADDITIONS PAGE.

# Access session.
session_start() ;

# Set page title and display header section.

include ( 'includes/template_header.php' ) ;

# Get passed product id and assign it to a variable.
if ( isset( $_GET['id'] ) ) $id = $_GET['id'] ; 

# Open database connection.
require ( '../connect_db.php' ) ;

# Retrieve selective item data from 'shop' database table. 
$q = "SELECT * FROM products WHERE id = $id" ;
$r = mysqli_query( $dbc, $q ) ;
if ( mysqli_num_rows( $r ) == 1 )
{
  $row = mysqli_fetch_array( $r, MYSQLI_ASSOC );

  # Check if cart already contains one of this product id.
  if ( isset( $_SESSION['cart'][$id] ) )
  { 
    # Add one more of this product.
    $_SESSION['cart'][$id]['quantity']++; 
    echo '<h5>Another '.$row["product_title"].' has been added to your cart</h5>';
  } 
  else
  {
    # Or add one of this product to the cart.
    $_SESSION['cart'][$id]= array ( 'quantity' => 1, 'price' => $row['product_price'] ) ;
    echo '<p>'.$row["product_title"].' has been added to your cart</p>' ;
  }
}

# Close database connection.
mysqli_close($dbc);

# Create navigation links.
echo '<p><a href="cart.php">View Cart</a></p>' ;

# Display footer section.
include ( 'includes/template_footer.php' ) ;

?>