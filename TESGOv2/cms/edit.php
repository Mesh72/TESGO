<?php

include("includes/template_cmsheader.php");?>

<?php

require('../../connect_db.php');

		
		$query = "SELECT * FROM products";
		$results = mysqli_query($dbc, $query);
		
		if (mysqli_num_rows($results) > 0)
		{
		// This echo occurs only once before it reaches the while statement
		echo '<table id="removeprod"> <form action="editproduct.php" method="POST">
				<tr>
					<th>ID</th>
					<th>Product</th>
					<th>Product Details</th>
					<th>Category</th>
					<th>Subcategory</th>
					<th>Quantity</th>
					<th>Price</th>
					<th>Edit</th>
				</tr>';
		
		// This starts the loop
		while ( $row = mysqli_fetch_array($results, MYSQLI_ASSOC))
		{		
		//Echos the table data
		echo '<tr>
					<td>'.$row['id'].'</td>
					<td>'.$row['product_title'].'</td>
					<td>'.$row['product_details'].'</td>
					<td>'.$row['category'].'</td>
					<td>'.$row['subcategory'].'</td>
					<td>'.$row['quantity'].'</td>
					<td>'.$row['product_price'].'</td>
					<td> <a href="editproduct.php?id='.$row['id'].'">Edit</a></td>
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