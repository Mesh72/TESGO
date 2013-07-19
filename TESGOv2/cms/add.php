<?php 
include_once("includes/template_cmsheader.php");
?> 

<?php require('../../connect_db.php'); 
?>	
	
		<div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>  
    <script src="../scripts/upload.js"></script>
			<article>	
				<form class="admin" name="input" action="addproduct.php" method="POST">
					<h5>Product title: <input type="text" name="producttitle" size="60" maxlength="55" placeholder=" Product title"> <br>
						Product details: <textarea rows="4" cols="30" input type="text" name="productdetails"></textarea><br>
						Quantity: <input type="text" name="quantity" size="60" maxlength="55" placeholder=" Quantity of products"> <br>
						Product price: <input type="text" name="productprice" size="60" maxlength="55" placeholder=" Product price"> <br>
						Category: <input type="text" name="category" size="60" maxlength="55" placeholder=" Books, Movies, Dvds, Miscellaneous"> <br>
						Sub Category: <input type="text" name="subcategory" size="60" maxlength="55" placeholder=" Sub category"> <br>
						Keywords: <input type="text" name="keyword" size="60" maxlength="55" placeholder=" Keywords"> <br></h5>
						<input type="Submit" value="Add item">
				</form>
			</article>
		<div>

	




	</div>
</body>
	<?php
include_once("../includes/template_footer.php");
?>

