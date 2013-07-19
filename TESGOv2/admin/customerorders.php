<?php

include("includes/template_adminheader.php");?>

<?php

require('../../connect_db.php');

		
		$query = "SELECT * FROM customerorders";
		$results = mysqli_query($dbc, $query);
		
		if (mysqli_num_rows($results) > 0)
		{
		// This echo occurs only once before it reaches the while statement
		echo '<table id="removeprod"> <method="POST">
				<tr>
					<th>Order ID</th>
					<th>Customer ID</th>
					<th>Total</th>
					<th>Date Added</th>
				</tr>';
		
		
		while ( $row = mysqli_fetch_array($results, MYSQLI_ASSOC))
		{		
		//Echos the table data
		echo '<tr>
					
					<td><a href="#" onclick="orderInfo('.$row['id'].')">'.$row['id'].' - View Details</td>
					<td><a href="#" onclick="customerInfo('.$row['user_id'].')">'.$row['user_id'].' - View Details</td>
					<td>'.$row['total'].'</td>
					<td>'.$row['date_added'].'</td>
				</tr>';
		
		}
		
		
		//End of loop
		
		echo '</table>';
		
		mysqli_close($dbc);
		}
		
echo '<h5><a href="#" onclick="orderInfo(1); return false;"></a></h5>
<div id="customerdetailsform"></div>';	
?> 

<?php
include_once("../includes/template_footer.php");
?>