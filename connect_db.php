<?php  
//connect_db.php
$dbc = mysqli_connect
('localhost', 'root', '', 'shop')
OR die 
(mysqli_connect_error());
mysqli_set_charset($dbc, 'utf-8');            