<?php

$id=$_GET['id'];

include("template_cmsheader.php");?>

<?php

require('../connect_db.php');

		
		$query = "SELECT * FROM products WHERE id = $id";
		
		
		
		$results = mysqli_query($dbc, $query);
		
		//setting the variables
		$id = "";
		$product_title = "";
		$product_image = "";
		$product_details = "";
		$product_price = "";
		$category = "";
		$subcategory = "";
		$keyword = "";
		
		while ( $row = mysqli_fetch_array($results, MYSQLI_ASSOC))
		{
			$id = $row['id'];
			$product_title = $row['product_title'];
			$product_image = $row['product_image'];
			$product_details = $row['product_details'];
			$product_price = $row['product_price'];
			$category = $row['category'];
			$subcategory = $row['subcategory'];
			$keyword = $row['keyword'];
		
		
		echo '
		<div>
			<article>	
				<form class="admin" name="input" action="update.php" method="POST">
					<h5>ID: <input type="text" name="id" size="60" maxlength="55" value="'.$id.'"> <br>
						Product title: <input type="text" name="producttitle" size="60" maxlength="55" value="'.$product_title.'"> <br>
						Product image: <input type="text" name="productimage" size="60" maxlength="55" value="'.$product_image.'"> <br>
						Product details: <textarea rows="4" cols="30" input type="text" name="productdetails" value="'.$product_details.'"></textarea><br>
						Product price: <input type="text" name="productprice" size="60" maxlength="55" value="'.$product_price.'"> <br>
						Category: <input type="text" name="category" size="60" maxlength="55" value="'.$category.'"> <br>
						Sub Category: <input type="text" name="subcategory" size="60" maxlength="55" value="'.$subcategory.'"> <br>
						Keywords: <input type="text" name="keyword" size="60" maxlength="55" value="'.$keyword.'"> <br></h5>
						<input type="Submit" value="Update">
						
				</form>
			</article>
		<div>';
			
		}	
?> 




<?php
include_once("template_footer.php");
?>