<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset="UTF-8"/>
	<title>TESGO</title>
<link href="style/style.css" rel="stylesheet" type="text/css"/>

<script type="text/javascript">
//Customer details form retrieval
//REF: AJAX - Server Response, http://www.w3schools.com/ajax/ajax_xmlhttprequest_response.asp, Accessed: April 2013
function customerInfo(id)
{
document.getElementById("customerdetailsform").innerHTML="Loading..";
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
    document.getElementById("customerdetailsform").innerHTML=xmlhttp.responseText;
    }
}
xmlhttp.open("GET","customerdetails.php?id="+id,true);
xmlhttp.send();
}

function orderInfo(id)
{
document.getElementById("customerdetailsform").innerHTML="Loading..";
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
    document.getElementById("customerdetailsform").innerHTML=xmlhttp.responseText;
    }
}
xmlhttp.open("GET","orderdetails.php?id="+id,true);
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
						<li> <a href="#"> Admin </a></li>
						<li> <a href="../cms/cms.php"> CMS / </a></li>
					</ul>
				</nav>
				
				<a href="../home.php"> <img src="../images/TESGO_logo.png" 
				alt="Logo" width="130px" height="50px" />
				</a>
				
				<form name="input" action="../search.php" method="POST">
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
					<li> <a href="../index.php">Home</a> </li>
					<li> <a href="customerorders.php">Customer Orders</a> </li>
					<li> <a href="ordercontents.php">Content Orders</a> </li>
					<li> <a href="product.php">Products</a> </li>
				</ul>
			</nav>
		</div>

<section id="pageContent">
