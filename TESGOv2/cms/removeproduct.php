<?php

$id=$_GET['id'];

include("includes/template_cmsheader.php");?>

<?php

require('../../connect_db.php');

		
		$query = "DELETE FROM products WHERE id = $id";
		
		
		
		$results = mysqli_query($dbc, $query);
		
		mysqli_close($dbc);
		
		
		
		echo '<p>You have successfully removed a product.</p>';
			
?> 




<?php
include_once("../includes/template_footer.php");
?>