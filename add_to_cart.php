<?php
//iniciate session
session_start();

//include('mysqli_connect.php');

//see if button was pushed and submitted 
if (isset($_POST['add'])){
	
	//if session cart was already set 
	if(!empty($_SESSION['cart'])){
		
			//create array that holds retrieved name and price for product added 
			$p_array = array($_POST['name'] => $_POST['price']);
			//push data into session cart array 
			$_SESSION['cart'] = array_merge($_SESSION['cart'], $p_array);
		
	}else{
		//if session cart is  not set yet 
		//start session cart variable  array 
		$_SESSION['cart'] = array(); 
		
		//define array that holds retrieved name and price for product added 
		$p_array = array($_POST['name'] => $_POST['price']);
		//push new data into session cart array 
		$_SESSION['cart'] = array_merge($_SESSION['cart'], $p_array);
		
		$cart = $_SESSION['cart'];
		
		
	}
}

//print header / logout button 
echo "<header><h3>Crystal Clear <button class=\"btn\" onclick=\"window.location.href='logout.php';\">Log out</button></h3></header>";
//report success of added data to cart 		
echo "<h2>Successfully added ". $_POST['name']. " to cart.</h2>";

?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Added to Cart</title>
<style>
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
h2 {
	align-text: center; 
	background-color: white;
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

<body>
	
<!--view cart button-->
<div class="center">
<button onclick="window.location.href='cart.php'">View Cart</button>
<!-- go back button -->
<button type="button" onclick="window.location.href='user_secret_page.php'">Go Back</button>
</div>
	
</body>
</html>