<?php 
include_once("includes/template_header.php");
?> 

<?php require('../connect_db.php');
		$id = $_GET['id'];
		$query = "SELECT * FROM products WHERE id LIKE '$id'";
		$results = mysqli_query($dbc, $query);
		$row = mysqli_fetch_array($results, MYSQLI_ASSOC);
		
		if (mysqli_num_rows($results) > 0)
		
		
		{		
		
		echo '<section class="products">
				<section class="image"><img src="images/'.$row['product_image'].'"></section>
				<h2>'.$row['product_title'].'</h2>
				<h3>'.$row['product_details'].'</h3>
				<h4>&pound;'.$row['product_price'].'</h4>
				<h4>Quantity in Stock: '.$row['quantity'].'</h4>
				<dt class="btn"><h4><a href="addcart.php?id='.$row['id'].'">Add to Cart</a></h4></dt>
			</section>';
		
		}
		
		mysqli_close($dbc);
		
		
		
		?> 

<?php
include_once("includes/template_footer.php");
?>