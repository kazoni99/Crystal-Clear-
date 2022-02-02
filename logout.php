<?php 
//start session
session_start();

//unset session 
$_SESSION['username'] = "";
$_SESSION['cart'] = "";

?><head>
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
.b { 
	background-color: pink;
	width: 500px;
	border-radius: 20px 20px 20px 20px;
	margin: auto; 
	padding: 20px; 
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
</style>
</head>
<html>
	
<!--crystal clear header --> 

<header> 
	<h3>Crystal Clear</h3>
</header>	
<br>
	
<!-- log out response --> 
<div class="b">
	<h1>Logged Out!</h1>
	<p>You are now logged out!</p>
	<!--log in button/ takes you to log in page(aka index.php)--> 
	<button type="button"
	onclick = "location.href='index.php';">Log in</button>
</div>
	
</html>