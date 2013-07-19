<?php
$dbc = mysqli_connect ('localhost', 'root', '')
		OR die (mysqli_connect_error());
		if (!$dbc)
		{
		die ('Could not connect' . mysqli_error());
		}

//Prevent db duplication
$check  = mysqli_select_db ($dbc, "shop");
// db does not exist, run this if statement
if(!$check){

// Create shop database
$query = "CREATE DATABASE IF NOT EXISTS shop";
mysqli_query ($dbc, $query);
		
mysqli_select_db ($dbc, "shop")
	or die ("Cannot connect to shop");
	
// Create table 1 for storing products
$query = "CREATE TABLE IF NOT EXISTS products (
				id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
				product_title VARCHAR(255),
				product_image TEXT,
				product_details TEXT,
				quantity INT UNSIGNED NOT NULL DEFAULT 1, 
				product_price VARCHAR(16),
				category VARCHAR(16),
				subcategory VARCHAR(16),
				date_added DATE,
				keyword VARCHAR(255),
				stock_level INT UNSIGNED 
				)";
				
				mysqli_query($dbc, $query);

// Insert dummy data into the products table
$query = "INSERT INTO products (product_title, product_image, product_details, quantity, product_price, category, subcategory, date_added, keyword, stock_level)
				VALUES
				('The Stone Roses','stoneroses.jpg', 'Debut Album', 10, 7.99, 'Music', 'Indie', 0000-00-00, 'music album cd indie rock band', 10),
				('Lego Star Wars Encyclopedia', 'Legostarwarsbook.png', 'For LEGO fans', 6, 10.99, 'Books', 'Childrens', '0000-00-00', 'childrens books lego fiction star wars', 6),
				('Pop Will Eat Itself', 'Boxfrenzy.jpg', 'Box Frenzy', 1, 12.99, 'Music', 'Indie', '0000-00-00', 'music album cd indie punk band', 1),
				('James', 'Jameslaid.jpg', 'Laid', 8, 7.99, 'Music', 'Indie', '0000-00-00', 'music album cd indie rock band 1990s', 8),
				('Aria Guitar', 'ariaguitar.gif', 'Acoustic guitar', 7, 129.99, 'Miscellaneous', 'Instruments', '0000-00-00', 'musical instrument guitar acoustic classic', 7),
				('Rubber Chicken Toy', 'Rubber_chicken.jpg', 'For chicken lovers', 6, 0.99, 'Miscellaneous', 'Toys', '0000-00-00', 'dog chew fun joke leisure', 6),
				('Scuba Diving Goggles', 'Scuba_goggles.jpg', 'Quality gogggles', 8, 34.99, 'Miscellaneous', 'Leisure', '0000-00-00', 'swimming mask snorkel leisure', 8),
				('Diary Of A Wimpy Kid', 'DiaryOfAWimpyKid.jpg', 'by Jeff Kinney', 2, 5.00, 'Books', 'Childrens', '0000-00-00', 'childrens books boys fiction jeff kinney', 2),
				('Wonders of Life', 'BrianCox.jpg', 'by Brian Cox', 4, 12.00, 'Books', 'Life', '0000-00-00', 'Brian Cox lifestyle books factural', 4),
				('The Hairy Bikers', 'HairyBikers.jpg', 'by Dave Myers and Si King', 5, 10.00, 'Books', 'Life', '0000-00-00', 'Dave Myers Si King factural books cooking', 5),
				('My Time', 'BradleyWiggins.jpg', 'by Bradley Wiggins', 6, 10.00, 'Books', 'Life', '0000-00-00', 'Bradley Wiggins Factural Cycling Sport books', 6),
				('The Beatles', 'The Beatles 62-66.jpg', '1962-1966', 3, 15.00, 'Music', 'Rock', '0000-00-00', 'music album cd indie rock band 1960s', 3),
				('Blur', 'BestofBlur.jpg', 'Best of', 4, 5.00, 'Music', 'Indie', '0000-00-00', 'music album cd indie rock band', 4),
				('No Country For Old Men', 'NoCountry.jpg', 'Coen Brothers', 9, 9.00, 'DVD', 'Adult', '0000-00-00', 'Joel Ethan Coen Adult Movie Cinema DVD', 9),
				('Burn After Reading', 'BurnAfterReading.jpg', 'Coen Brothers', 10, 9.00, 'DVD', 'Adult', '0000-00-00', 'Joel Ethan Coen Adult Movie Cinema DVD', 10),
				('Fargo', 'Fargo.jpg', 'Coen Brothers', 7, 9.00, 'DVD', 'Adult', '0000-00-00', 'Joel Ethan Coen Adult Movie Cinema DVD', 7),
				('O Brother Where Art Thou', 'OBrother.jpg', 'Coen Brothers', 8, 9.00, 'DVD', 'Adult', '0000-00-00', 'Joel Ethan Coen Adult Movie Cinema DVD', 8),
				('The Big Libowski', 'BigLibowski.jpg', 'Coen Brothers', 5, 9.00, 'DVD', 'Adult', '0000-00-00', 'Joel Ethan Coen Adult Movie Cinema DVD', 5),
				('Led Zeppelin Tshirt', 'Led Zeppelin.jpg', 'Led Zeppelin', 5, 9.00, 'Miscellaneous', 'Clothing', '0000-00-00', 'music apparel clothing rock band Robert Plant', 5),
				('Zippo Lighter', 'Zippo.jpg', 'Original Chrome lighter', 4, 15.00, 'Miscellaneous', 'Gadgets', '0000-00-00', 'petrol chrome smoking', 4)
				";
			  
				mysqli_query($dbc, $query);
				
// Create table for customer details

$query = "CREATE TABLE IF NOT EXISTS customer(
			customer_id INT UNSIGNED AUTO_INCREMENT NOT NULL,
			l_name VARCHAR(20) NOT NULL,
			f_name VARCHAR(20) NOT NULL,
			email VARCHAR(50) NOT NULL,
			telephone VARCHAR(15) NOT NULL,
			address VARCHAR(255) NOT NULL,
			postcode VARCHAR(9) NOT NULL,
			country VARCHAR(30) NOT NULL,
			date_added DATETIME NOT NULL,
			PRIMARY KEY (customer_id)
			)";
			
			mysqli_query($dbc, $query);

//Insert data into customer details
$query = "INSERT INTO customer (customer_id, l_name, f_name, email, telephone, address, postcode, country, date_added)
				VALUES
				('1', 'Jones', 'Jimmy', 'jj@email.com', '02392 636363', '12 Victory Avenue', 'PO8 9PJ', 'UK', '0000-00-00 00:00:00'),
				('2', 'Jones', 'James', 'jjs@email.com', '02392 636363', '13 Victory Avenue', 'PO8 9PJ', 'UK', '0000-00-00 00:00:00')
				";
				
				mysqli_query($dbc, $query);
				
				
// Create table for customerorders - ***user_id = customer_id***
$query = "CREATE TABLE IF NOT EXISTS customerorders (
				id INT UNSIGNED AUTO_INCREMENT NOT NULL,
				user_id INT UNSIGNED NOT NULL,
				total DECIMAL(8,2) NOT NULL,
				date_added DATETIME NOT NULL,
				PRIMARY KEY (id),
				FOREIGN KEY (user_id) REFERENCES customer(customer_id)
				)";
				//runs the query
				mysqli_query($dbc, $query);
				
// Insert dummy data into customerorders
$query = "INSERT INTO customerorders (user_id, total, date_added)
				VALUES
				(0001, 15.00, '0000-00-00 00:00:00'),
				(0001, 9.00, '0000-00-00 00:00:00')
				";
				
				mysqli_query($dbc, $query);
				
// Create table for ordercontents
$query = "CREATE TABLE IF NOT EXISTS ordercontents (
				content_id INT UNSIGNED AUTO_INCREMENT NOT NULL,
				order_id INT UNSIGNED NOT NULL,
				product_id INT UNSIGNED NOT NULL,
				quantity INT UNSIGNED NOT NULL DEFAULT 1,
				price DECIMAL(4,2) NOT NULL,
				PRIMARY KEY (content_id)
				)";
				
				mysqli_query($dbc, $query);
				
//Insert dummy data into ordercontents
$query = "INSERT INTO ordercontents (order_id, product_id, quantity, price)
				VALUES
				(1, 20, 1, 15.00),
				(2, 19, 1, 9.00)
				";
				
				mysqli_query($dbc, $query);




			
}
else{
// Load page as normal	
}
?>