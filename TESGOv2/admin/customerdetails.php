<?php

$id = $_GET['id'];
		require ( '../../connect_db.php' ) ;
	$query = "SELECT * FROM customer WHERE customer_id = '$id'";
	$results = mysqli_query($dbc, $query);	
	
		if (mysqli_num_rows($results) > 0)
		
		{
		// This echo occurs only once before it reaches the while statement
		echo '<table id="removeprod"> <form action="customerorders.php" method="POST">
				<tr>
					<th>Customer ID</th>
					<th>Customer</th>
					<th>Addrress</th>
					<th>Postcode</th>
					<th>Country</th>
					<th>Date</th>
				</tr>';
		
		// This starts the loop
		while ( $row = mysqli_fetch_array($results, MYSQLI_ASSOC))
		{		
		echo '<tr>
				<td>'.$row['customer_id'].'</td>
				<td>'.$row['f_name']." ".$row['l_name'].'</td>
				<td>'.$row['address'].'</td>
				<td>'.$row['postcode'].'</td>
				<td>'.$row['country'].'</td>
				<td>'.$row['date_added'].'</td>
				</tr>';
		}
		}
		echo '</table>';
		
		mysqli_close($dbc);
?>