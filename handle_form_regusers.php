<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Registered Users</title>
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
//connect to database 
include('mysqli_connect.php'); 

//set query 
$query = "SELECT * FROM users ORDER BY id"; 

//run query 
$result = mysqli_query($dbc, $query); 

//count number of returned rows 
$num = mysqli_num_rows($result); 

//close the $dbc object 
mysqli_close($dbc); 

//if retured rows
if ($result){
		
		if ($num > 0){
		//Print header and logout button  
		echo "<header><h3>Crystal Clear <button class= \"btn\" onclick=\"window.location.href='logout.php';\">Log out</button></h3></header>";
		//print number of registered users 
		echo "<h4>Number of Registered Users: " . $num . "</h4>";
		//print beginning of table tag 
		echo '<table width = "50%"> 
		<thread> 
		<tr>
			<th align="left">Registered User</th> 
			<th align="left">Email</th>
		</tr> 
		</thread>
		<tbody>';
	} else {
		echo "<h3>NA</h3>";
	}

	//present results 
	while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
		echo '<tr><td align="left">' . $row['username'] . '</td><td align="left">' . $row['email']. '</td></tr>';
	}
	
	//print end of table tag
	echo '</tbody></table>'; 
	//print end of search response 
	echo "<h4>Search Completed.</h4>";
	//print go back button 
	echo "<div class=\"center\"><button type=\"button\" onclick=\"location.href='https://kmzanoni.uwmsois.com/final/admin_secret_page.php'\">Go Back</button></div>";

//if no retured rows or error 
} else {
	//print error response 
	echo '<h3>The current search could not be retrived.</h3>';
	//retrieve error 
	echo '<p>' . mysqli_error($dbc) . '<br><br>Query: ' . $query . '</p>';
	//print go back button 
	echo "<div class=\"center\"> <button type=\"button\" onclick=\"location.href='https://kmzanoni.uwmsois.com/final/admin_secret_page.php'\">Go Back</button></div>";
}
?>

</body>
</html>