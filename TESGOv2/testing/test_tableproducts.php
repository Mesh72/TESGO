$sqlCommand = "CREATE TABLE IF NOT EXISTS products (
				id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
				product_title VARCHAR(255),
				product_image TEXT,
				product_details TEXT,
				product_price VARCHAR(16),
				category VARCHAR(16),
				subcategory VARCHAR(16),
				date_added DATE,
				product_views INT NOT NULL default '0'
				)";

// Insert dummy data into the products table
$sqlCommand2 = "INSERT INTO products (product_title, product_image, product_details, product_price, category, subcategory, date_added)
				VALUES
				('Stone Roses - The Stone Roses','images/stoneroses.jpg', 'the debut album', '7.99', 'Music', 'Indie', '0000-00-00'),
				('Lego Star Wars Character Encyclopedia', 'images/Legostarwarsbook.png', 'For LEGO fans', '10.99', 'Books', 'Childrens', '0000-00-00'),
				('PWEI', 'images/Boxfrenzy.jpg', 'Box Frenzy', '12.99', 'Music', 'Indie', '0000-00-00'),
				('James', 'images/Jameslaid.jpg', 'Laid', '7.99', 'Music', 'Indie', '0000-00-00'),
				('Aria Guitar', 'images/ariaguitar.gif', 'Acoustic guitar', '129.99', 'Music', 'Instruments', '0000-00-00')
				)";