<?php

$total = $_GET['total'];
		
	echo '			
				<h6> Please check your items and enter your delivery details. <br>To confirm purchase press the checkout button</h6>
				<form class="admin" name="input" action="checkout.php?total='.$total.'" method="POST">
					<h5>First name: <input type="text" name="f_name" size="60" maxlength="55" required> <br>
						Second name: <input type="text" name="l_name" size="60" maxlength="55" required> <br>
						Email: <input type="text" name="email" size="60" maxlength="55" required> <br>
						Telephone: <input type="text" name="telephone" size="20" maxlength="11" required> <br>
						Address: <textarea rows="4" cols="30" input type="text" name="address" size="60" maxlength="100" required></textarea>
						Postcode: <input type="text" name="postcode" size="20" maxlength="9" required> <br>
						Country: <input type="text" name="country" size="20" maxlength="50" required> <br>
						<input type="Submit" value="Checkout">
				</form>
				';
				
				
?>