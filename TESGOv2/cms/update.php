<?php
include_once("includes/template_cmsheader.php");


if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' )
{
	require('../../connect_db.php');
	
			$id = $_POST['id'];
			$product_title = $_POST['producttitle'];
			$product_image = $_POST['productimage'];
			$product_details = $_POST['productdetails'];
			$product_price = $_POST['productprice'];
			$category = $_POST['category'];
			$subcategory = $_POST['subcategory'];
			$keyword = $_POST['keyword'];

// Insert data into the products table
$query = "UPDATE products
			SET product_title='$product_title',
			product_image='$product_image',
			product_details='$product_details',
			product_price='$product_price',
			category='$category',
			subcategory='$subcategory',
			keyword='$keyword'
			WHERE id='$id'
			";
			
			
			$r = mysqli_query($dbc, $query);
				
				
			echo '<article><h5>Congratulations. Your item has been updated</h5><dt class="btn"><h4><a href="edit.php">Update another item</a></h4></dt></article>';
			

	mysqli_close($dbc);
}
?>

<?php
include_once("../includes/template_footer.php");
?>


