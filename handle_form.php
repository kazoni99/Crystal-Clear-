<?php
//start the session 
session_start();

//connnection to database
include('mysqli_connect.php');

// Pass login form data 
$username = mysqli_real_escape_string($dbc, trim($_POST['username']));
$password = mysqli_real_escape_string($dbc, trim($_POST['password']));


// Formulate the query to check if username and password matches within the database
$query = "SELECT * from users WHERE username = '$username' AND password = SHA2('$password', 224)"; 



// Run the query
$result = mysqli_query($dbc, $query);

//if query recieves exctly 1 instance
if(mysqli_num_rows($result) == 1){
	
	$row = mysqli_fetch_assoc($result);
	
	if($row['is_admin'] == 1){ 
		//if user is an admin user 
		//store session data
		$_SESSION['username'] = $username;
		//direct user to the admin secret page 
		header("Location: admin_secret_page.php"); 
	}else {
		//user is not an admin user 
		
		//store session data
		$_SESSION['username'] = $username;
		
		//direct user to the user secret page 
		header("Location: user_secret_page.php"); 
	}
	//end the current script
	exit(); 
}
else {
	//invalid user 
	//direct user back to login page 
	header("Location: index.php"); 
	
	//end the current script
	exit(); 
}
?>