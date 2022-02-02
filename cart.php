<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Cart</title>
<style>
body {
		margin: auto; 
		padding: 0;
		background-image: url('crystal.jpeg');
		background-attachment: fixed;
		background-repeat: no-repeat;
		background-size: cover;
		background-position: 100% 100%;
	}
table {
	background-color: pink;
	width: 500px;
	border-radius: 20px 20px 20px 20px;
	margin: auto; 
	padding: 20px; 
	}
th,td {
	padding: 2px 10px 10px 10px;
	border-radius: 20px 20px 20px 20px; 
	text-align: left;
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
h4{
	align: center;
	padding: 10px;
	background-color: white;
	text-align: center;
	}
	
</style>
</head>
<body>
<?php
//define variable to hold session cart array variable 
$cart = ($_SESSION['cart']);

//print crystal clear header and logout button 
echo "<header><h3>Crystal Clear <button class=\"btn\" onclick=\"window.location.href='logout.php';\">Log out</button></h3></header><br><br>";

// if session cart is not empty 
if (!empty($cart)){
	
	//start shopping cart table
	echo "<table>
	<tr><th>Shopping Cart</th></tr><br><br>
	<tr>
	<th>Name</th>
	<th>Price</th>
	</tr>";
	
	//loop through each product and price in session cart array 
	foreach($cart as $key => $value){ 
		echo"<tr>
		<td>$key</td>
		<td>$value</td>
		</tr>";
	}
//if session empty 
}else {
	echo "<h4>You have no items in cart.</h4><br>";
}
?>
</table> 

<!--go back to user search page-->
<div class="center">
<button type="button" onclick="window.location.href='user_secret_page.php'">Go Back</button>
</div>
	
</body>
</html>