<?php

require('../connect_db.php');

$query = "DROP DATABASE 'shop';";

$result = mysqli_query($dbc, $query);

echo ("You have deleted the database");

?>