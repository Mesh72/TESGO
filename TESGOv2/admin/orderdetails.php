<?php

$id = $_GET['id'];

require ( '../../connect_db.php' ) ;
	
	$query = "SELECT customerorders.id, customerorders.total, customerorders.user_id, customer.l_name, customer.f_name, ordercontents.product_id, ordercontents.quantity, ordercontents.price, products.product_title
			FROM customerorders, customer, ordercontents, products
			WHERE customerorders.id=".$id."
			AND customerorders.user_id=customer.customer_id
			AND customerorders.id=ordercontents.order_id
			AND ordercontents.product_id=products.id";
	$results = mysqli_query($dbc, $query);
	
		
	
		{
		// This echo occurs only once before it reaches the while statement
		echo '<table id="removeprod"> <form action="customerorders.php" method="POST">
				<tr>
					<th>ID</th>
					<th>User ID</th>
					<th>Customer</th>
					<th>Product Title</th>
					<th>Product ID</th>
					<th>Quantity</th>
					<th>Price</th>
					<th>Total</th>
				</tr>';
				
		// This starts the loop
		while ($row = mysqli_fetch_array($results, MYSQLI_ASSOC))
		{
		echo '<tr>
				<td>'.$row['id'].'</td>
				<td>'.$row['user_id'].'</td>
				<td>'.$row['f_name'].' '.$row['l_name'].'</td>
				<td>'.$row['product_title'].'</td>
				<td>'.$row['product_id'].'</td>
				<td>'.$row['quantity'].'</td>
				<td>'.$row['price'].'</td>
				<td>'.$row['total'].'</td>
				</tr>';
		}
		}
		echo '</table>';
		
		mysqli_close($dbc);
?>