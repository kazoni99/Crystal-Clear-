<?php
// start session
session_start();


// Check if session is empty
if (empty($_SESSION['username'])) {
    // redirect user to the login page
    header("Location: index.php");
    
    // terminate the current script
    exit();
}
else
{
	//print crystal clear header and logout button 
	echo "<header><h3>Crystal Clear
	<button class=\"btn\" onclick=\"window.location.href='logout.php';\">Log out</button>
	<button class=\"btn\" onclick=\"window.location.href='cart.php'\">View Cart</button>
	</h3></header>
	";
	//print welcome user response 
	echo "<h1>Welcome ".$_SESSION['username']."!<br> Search through and find what crystals you want to purchase.</h1>";
}  
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Login</title>
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
	background-color: pink;
	}
fieldset { 
	background-color: pink; 
	font-weight: bold; 
	border: none; 
	width: 500px;
	border-radius: 20px 20px 20px 20px;
	padding: 20px;
	margin: 20px;
	}
input, select{
	height: 30px; 
	width: 100px;
	border-radius: 10px 10px;
	diaplay: block; 
	}
h1{
	align: center; 
	padding: 10px; 
	background-color: white;
	}
h2 {
	align-text: center; 
	}
button {
	background-color: white; 
	padding: 10px; 
	border-radius: 10px;
	}
.btn { 
	float: right; 
	margin: 5px;
	}

</style>
</head>

<body>
<div> 
	<div>
   <br>
	<!--Form Search products by category/intention-->
  	<form action="handle_form_category.php" method="post" accept-charset="UTF-8">
		<fieldset><h2>Search Crystal by Intention for Transformation (category):</h2>
		
		<!--user input intention field -->
		<p><label>Transformation:</label>
		<select name="category">
			<option value="protection">Protection</option>
			<option value="wealth">Wealth</option>
			<option value="love">Love</option>
			<option value="health">Health</option>
			<option value="balance">Balance</option>
			</select>
			</p>
		<!--Search button-->
		<p float=left><input type="submit" name="search" value="search"></p>
		</fieldset>

	</form>
	</div> 
	
	<div>
	<!--form Search products by price -->
	<form action="handle_form_price.php" method="post" accept-charset="UTF-8">
		<fieldset><h2>Search Crystal by Price</h2>
		<!--user input of min and max price fields -->	
		<p><label>Value Between: $<input type="text" name="min_value" size="20" maxlength="40"></label>
		<label>and $<input type="text" name="max_value" size="20" maxlength="40"></label></p>
		<!--submit button-->
		<p float="left"><input type="submit" name="search" value="search"></p>
		</fieldset>
	</form>
	</div>
</div>
</body>
</html>
