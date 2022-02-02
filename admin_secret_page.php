<?php
// start session
session_start();

// if session is empty
if (empty($_SESSION['username'])) {
    // redirect user to the login page
    header("Location: index.php");
    
    // terminate the current script
    exit();
}
else
{
	//connect to database 
	include('mysqli_connect.php');
	
	//header including store Title and logout button 
	echo "<header><h3>Crystal Clear <button class= \"btn\" onclick=\"window.location.href='logout.php';\">Log out</button> </h3></header>";
	//print welcoming admin user code using stored session 
	echo"<h1>Welcome ADMIN ".$_SESSION['username']."! You are now allowed to view number of registered users and add new products.</h1>";
	
}  
?>
<html>
<head> 
<meta charset="UTF-8">
<title>Admin-CrystalClear</title>
<style> 
h1{
	align: center; 
	background-color: white;
	padding: 10px; 
	}
body { 
	margin: auto; 
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
fieldset {
	background-color: pink;
	font-weight: bold; 
	border: none; 
	width: 500px; 
	margin: auto; 
	border-radius: 20px 20px 20px 20px; 
	}
input { 
	height: 30px; 
	border-radius: 10px 10px; 
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
	
<!-- Button that travels to page with regestered users list -->	
<div class="center">
	<button onclick="window.location.href='handle_form_regusers.php';">Registered Users List</button>
</div>	

<!--Add New product Form-->
<form action="handel_form_productadd.php" method="post" accept-charset="UTF-8">
	
	<fieldset>
		<h2>Enter New Product Information Below:</h2>
		
		<!-- crystal name input field-->
		<p><label>Crystal Name: <input type="text" name="name" size="20" maxlength="75"></label></p>
		
		<!--category/intention for transformation input field-->
		<p><label>Intention of Transformation: <input type="text" name="category" size="30" maxlength="200"></label></p>
		
		<!--price input field -->
		<p><label>Crystal Price: $<input type="text" name="price" size="20" maxlength="75"></label></p>
		
		<!--quantity of crystals input field -->
		<p><label>Quantity: <input type="text" name="quantity" size="10" maxlength="75"></label></p>
		
		<!-- description/powers of crystal field --> 
		<p><label>Crystal Powers: <input type="text" name="description" size="30" maxlength="200"></label></p>
		
		<!--submit button -->
		<p align="left"><input type="submit" name="submit" value="Submit"></p>
	</fieldset>

</form>
   
<html>