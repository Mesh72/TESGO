<?php



include("includes/template_adminheader.php");?>

<?php

require('../../connect_db.php');

		
		$query = "SELECT id, product_title, product_image, product_details, product_price, quantity, date_added FROM products";
		$results = mysqli_query($dbc, $query);
		
		if (mysqli_num_rows($results) > 0)
		{
		// This echo occurs only once before it reaches the while statement
		echo '<table id="removeprod"> <method="POST">
				<tr>
					<th>ID</th>
					<th>Product Title</th>
					<th>Product Image</th>
					<th>Product Details</th>
					<th>Price</th>
					<th>Quantity in Stock</th>
					<th>Date Added</th>
				</tr>';
		
		
		while ( $row = mysqli_fetch_array($results, MYSQLI_ASSOC))
		{		
		//Echos the table data
		echo '<tr>
					<td>'.$row['id'].'</td>
					<td>'.$row['product_title'].'</td>
					<td>'.$row['product_image'].'</td>
					<td>'.$row['product_details'].'</td>
					<td>'.$row['product_price'].'</td>
					<td>'.$row['quantity'].'</td>
					<td>'.$row['date_added'].'</td>
				</tr>';
		
		}
		//End of loop
		
		echo '</table>';
		
		mysqli_close($dbc);
		}
		
		
?> 

<?php
include_once("../includes/template_footer.php");
?>