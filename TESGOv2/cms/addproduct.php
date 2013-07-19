<?php



if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' )
{
	require('../../connect_db.php');

// Insert data into the products table
$query = "INSERT INTO products (product_title, product_image, product_details, product_price, category, subcategory, date_added, keyword)
			VALUES ('$_POST[producttitle]', '$_POST[productimage]', '$_POST[productdetails]', '$_POST[productprice]', '$_POST[category]',
			'$_POST[subcategory]', NOW(), '$_POST[keyword]')
			";
			$r = mysqli_query($dbc, $query);
				
				
			if ($r)
			{ include ('includes/template_cmsheader.php' );
			include_once("../create_db.php");
			echo '<article><h5>Congratulations. Your item has been added</h5><dt class="btn"><h4><a href="imageupload.php">Add another item</a></h4></dt></article>';
			include ('../includes/template_footer.php' );
			}

	mysqli_close($dbc);
	
}
?>

