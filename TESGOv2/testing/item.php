<?php 
include_once("template_header.php");

require('../connect_db.php');

		
		$query = "SELECT product_image, product_title, product_details, product_price, stock_level FROM products";
		$results = mysqli_query($dbc, $query);
		$row = mysqli_fetch_array($results, MYSQLI_ASSOC);
				
		if (mysqli_num_rows($results) > 0)
		{
		// This echo occurs only once before it reaches the while statement
		
		echo '<table id="removeprod"> <form action="editproduct.php" method="POST">
				<tr>
					<th>Product</th>
					<th>Product_Title</th>
					<th>Product Details</th>
					<th>Price</th>
					<th>Items in stock</th>
				</tr>';
				
		
		
		{
				
		//Echos the table data
		echo '<tr>
					<td><img src="images/'.$row['product_image'].'"></td>
					<td>'.$row['product_title'].'</td>
					<td>'.$row['product_details'].'</td>
					<td>'.$row['product_price'].'</td>
					<td>'.$row['stock_level'].'</td>
				</tr>';
		
		}
		//End of loop
		
		echo '</table>';
		
		mysqli_close($dbc);
		}
		
		
?> 


<?php
include_once("template_footer.php");
?>