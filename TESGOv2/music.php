<?php 
include_once("includes/template_header.php");
?> 

<?php require('../connect_db.php');
		
		$query = "SELECT * FROM products WHERE category LIKE 'Music';";
		$results = mysqli_query($dbc, $query);
		
		if (mysqli_num_rows($results) > 0)
		{
		
		while ( $row = mysqli_fetch_array($results, MYSQLI_ASSOC))
		{		
		
		echo '<section class="products">
				<section class="image"><a href="itemv2.php?id='.$row['id'].' "><img src="images/'.$row['product_image'].'"></a></section>
				<h2>'.$row['product_title'].'</h2>
				<h3>'.$row['product_details'].'</h3>
				<h4>&pound;'.$row['product_price'].'</h4>
				<dt class="btn"><h4><a href="addcart.php?id='.$row['id'].'">Add to Cart</a></h4></dt>
			</section>';
		
		}
		
		mysqli_close($dbc);
		}
		else
		{
		echo '<p>There are currently no items in the shop.</p>';
		}
		
		?> 

<?php
include_once("includes/template_footer.php");
?>