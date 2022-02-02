<html>
<head>
<meta charset="UTF-8">
<title>Product Added</title>
<style>
h1 { 
	background-color: pink; 
	width:500px;
	margin: auto; 
	padding: 20px; 
	border-radius: 20px 20px 20px 20px; 
	}
body {
		margin: 0; 
		padding: 0;
		background-image: url('crystal.jpeg');
		background-attachment: fixed;
		background-repeat: no-repeat;
		background-size: cover;
		background-position: 100% 100%;
	}
header {
	padding: 10px;
	display: block;
	background-color: pink;
	}
button {
	background-color: white; 
	padding: 10px; 
	border-radius: 10px;
	}
.btn { 
	float: right; 
	}
.center { 
	display: flex; 
	justify-content: center;
	align-items: center;
	padding: 10px;
	}
</style>
</head>
<?php
//connect to database 
include('mysqli_connect.php');

//get data from form 
$name = $_POST['name'];
$category = $_POST['category'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$description = $_POST['description'];

//set query command - inserts data into products table 
$query = "INSERT INTO products(name, category, price, quantity, description) VALUES ('$name', '$category', '$price', '$quantity', '$description') "; 

//connect and run query in database 
$run = mysqli_query($dbc, $query); 

//report success 
if ($run) {
	//print crystal clear header and log out button 
	echo "<header><h3>Crystal Clear <button class= \"btn\" onclick=\"window.location.href='logout.php';\">Log out</button> </h3></header>";
	//new product added response 
	echo "<br><h1>The New Product has been added!</h1>";
	//print go back button 
	echo "<div class=\"center\"> <button type=\"button\" onclick=\"location.href='https://kmzanoni.uwmsois.com/final/admin_secret_page.php'\">Go Back</button></div>";
}else {
	//error response 
	echo "There was an error" . mysqli_error($dbc);
	//print go back button 
	echo "<p> <button type=\"button\" onclick=\"location.href='https://kmzanoni.uwmsois.com/final/admin_secret_page.php'\">Go Back</button></p>";
}
?>
<body>
	
</body>
</html>