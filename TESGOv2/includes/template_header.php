<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset="UTF-8"/>
	<title>TESGO</title>
<link href="style/style.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript">
//REF: W3Schools
function checkoutForm(total)
{
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("checkoutform").innerHTML=xmlhttp.responseText;
    }
}
xmlhttp.open("GET","checkout_form.php?total="+total,true);
xmlhttp.send();
}


</script>

</head>

<body>
	<div id="wrapper">
	
		<header>
			<div id="pageHeader">
			
				<nav id="admin-menu">
					<ul>
						<li> <a href="admin/admin.php"> Admin </a></li>
						<li> <a href="cms/cms.php"> CMS / </a></li>
					</ul>
				</nav>
				
				<a href="home.php"> <img src="images/TESGO_logo.png" 
				alt="Logo" width="130px" height="50px" />
				</a>
				
				<nav id="cart-menu">
					<ul>
						<li> <dt class="btn"><a href="cart.php">View Cart</a></dt></li>
					</ul>
				</nav>
				
				<form name="input" action="search.php" method="POST">
				SEARCH:<input name="search" type="text" size="40" maxlength="55" placeholder=" Product name, or keyword" required>
				<input type="Submit" value="Search">
				
				</form>
			</div>
			
			
				
		</header>
		
<div class="clear">
</div>

		<div>		
			<nav id="top-menu">
				<ul>
					<li> <a href="index.php">Home</a> </li>
					<li> <a href="books.php">Books</a> </li>
					<li> <a href="music.php">Music</a> </li>
					<li> <a href="dvd.php">DVD</a> </li>
					<li> <a href="miscellaneous.php">Miscellaneous</a> </li>
				</ul>
			</nav>
		</div>

<section id="pageContent">


