<?php
// Image upload
//REF: Burgess,A. 2011, Uploading Files with Ajax, net.tutsplus.com/tutorials/javascript-ajax/uploading-files-with-ajax/?search_index=3, Accessed: April 2013
foreach ($_FILES["images"]["error"] as $key => $error) {
    if ($error == UPLOAD_ERR_OK) {
        $name = $_FILES["images"]["name"][$key];
        move_uploaded_file( $_FILES["images"]["tmp_name"][$key], "../uploads/" . $_FILES['images']['name'][$key]);
    }
}

$filename = $_FILES['images']['name'][$key];

echo "<h5>Successfully Uploaded Image</h5>";

?>

				<form class="admin" name="input" action="addproduct.php" method="POST">
					<h5>Product image: <input type="text" value="<?php echo $filename;?>"name="productimage" size="60" maxlength="55" readonly='readonly'> <br>
						Product title: <input type="text" name="producttitle" size="60" maxlength="55" placeholder=" Product title" required> <br>
						Product details: <textarea rows="4" cols="30" input type="text" name="productdetails" required></textarea><br>
						Quantity: <input type="text" name="quantity" size="60" maxlength="55" placeholder=" Quantity of products" required> <br>
						Product price: <input type="text" name="productprice" size="60" maxlength="55" placeholder=" Product price" required> <br>
						Category: <input type="text" name="category" size="60" maxlength="55" placeholder=" Books, Movies, Dvds, Miscellaneous" required> <br>
						Sub Category: <input type="text" name="subcategory" size="60" maxlength="55" placeholder=" Sub category" required> <br>
						Keywords: <input type="text" name="keyword" size="60" maxlength="55" placeholder=" Keywords" required> <br></h5>
						<input type="Submit" value="Add item">
						
				</form>