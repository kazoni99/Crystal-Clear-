<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>CrystalClear-Login</title>
<link rel="stylesheet" href="style.css">
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
fieldset { 
	background-color: pink; 
	font-weight: bold; 
	margin: auto; 
	border: none; 
	width: 400px;
	border-radius: 20px 20px 20px 20px;
	padding: 20px;
	}
input {
	height: 40px; 
	width: 300px;
	border-radius: 10px 10px;
	}
h2 {
	align-text: center; 
	}
button {
	background-color: white; 
	padding: 10px; 
	border-radius: 10px;
	}

</style>
</head>
<body>
	
<!--Header for Crystal Clear -->
<header>
	<h3>Crystal Clear</h3>
</header>
<br>
	
<!-- Login Form -->
<form action="handle_form.php" method="post" accept-charset="UTF-8"> 
		
	<fieldset>
	<h2 align="center">Login</h2>
		
	<!--username field-->	
		<label>Username<br><input type="text" name="username"></label><br><br>
		
	<!--Password field--> 
	<label>Password</label><br>
	<input type="password" name="password" size="20" maxlength="128"><br><br>
	
	
	<!--submit/login button-->
		<button type= "submit" name="login_btn" >Login</button> 
	
	</fieldset>
</form>
</body>
</html>