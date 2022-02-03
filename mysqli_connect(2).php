<?php
DEFINE ('DB_HOST', 'XXXX'); //Database server
DEFINE ('DB_USERNAME', 'XXXX'); // Database username 
DEFINE ('DB_PASSWORD', 'XXX'); //Database Password 
DEFINE ('DB_NAME', 'XXXXX'); //Database Name 

//connects to the database 
$dbc = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME) OR die ('Could not connect to MySQL:'. mysqli_connect_error());
?>