<?php

include("includes/template_adminheader.php");?>

<?php

require('../../connect_db.php');

		
		$query = "SELECT * FROM ordercontents";
		$results = mysqli_query($dbc, $query);
		
		if (mysqli_num_rows($results) > 0)
		{
		// This echo occurs only once before it reaches the while statement
		echo '<table id="removeprod"> <method="POST">
				<tr>
					<th>Content ID</th>
					<th>Order ID</th>
					<th>Product ID</th>
					<th>Quantity</th>
					<th>Price</th>
				</tr>';
		
		
		while ( $row = mysqli_fetch_array($results, MYSQLI_ASSOC))
		{		
		//Echos the table data
		echo '<tr>
					<td>'.$row['content_id'].'</td>
					<td>'.$row['order_id'].'</td>
					<td>'.$row['product_id'].'</td>
					<td>'.$row['quantity'].'</td>
					<td>'.$row['price'].'</td>
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