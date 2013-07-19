<?php 
include_once("includes/template_cmsheader.php");
?> 

<?php require('../../connect_db.php'); 
?>	
	
		<div id="response">
		
			<article>	
				<form class="admin" action="upload.php" enctype="multipart/form-data" method="POST">
					<h5>Step 1: Upload product image. <input type="file" name="images" id="images" multiple /><br>
					<button type="submit" id="btn">Upload Files!</button>
					
				</form>
			</article>
		</div>
		
		

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>  
    <script src="../scripts/upload.js"></script>




	
</body>
	<?php
include_once("../includes/template_footer.php");
?>

