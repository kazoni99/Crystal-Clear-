<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Category Search</title>
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
table {
	background-color: pink;
	width: 50%;
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

//Get users input intentions type 
$category = $_POST['category']; 

//query used from data 
$query = "SELECT * FROM products WHERE category LIKE '%$category%'"; 

//run query 
$result = mysqli_query($dbc, $query); 

//count number of returned rows 
$num = mysqli_num_rows($result); 

//close the $dbc object 
mysqli_close($dbc); 

if ($result){
	
		if ($num > 0){
		//print crystal clear header and logout button
		echo "<header><h3>Crystal Clear <button class= \"btn\" onclick=\"window.location.href='logout.php';\">Log out</button></h3></header>";
		//print number of responses 
		echo "<h4> Number of crystals with " . $category . " Intention: " . $num . "</h4>";
		//begin table tag of display of products rows 
		echo '<table width = "50%"> 
		<thread> 
		<tr>
			<th align="left">Image</th>
			<th align="left">Crystal Name</th> 
			<th align="left">Intention</th> 
			<th align="left">Crystal Powers</th>
			<th align="left">Price</th>
			<th align="left">Add To Cart</th>
		</tr> 
		</thread>
		<tbody>';
	} else {
		echo "<p>NA</p>";
	}

	//present results in table 
	while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
		echo '<form action="add_to_cart.php" method="post">
		<tr>
		<td align-content="left"><img src="'.$row['image'].'" alt="No Image" width="100px" height="80px"></td>
		<td align="left"><input type="hidden" name="name" value="' . $row['name'] . '">'. $row['name'].'</td>
		<td align="left">' . $row['category'] . '</td>
		<td align="left">' . $row['description'] . '</td>
		<td align="left"><input type="hidden" name="price" value="$' . $row['price'] . '">$'. $row['price'].'</td>
		<td><button type="submit" name="add">Add to Cart</button></td>
		</tr>
		</form>';
	}
	
	//print closing table tags 
	echo '</tbody></table>'; 
	//report completed search
	echo "<h4>Search Completed.</h4>";
	//print go back button 
	echo " <div class=\"center\"><button type=\"button\" onclick=\"location.href='https://kmzanoni.uwmsois.com/final/user_secret_page.php'\">Go Back</button></div>";
} else {
	//error response 
	echo '<h4>The current search could not be retrived.</h4>';
	echo '<p>' . mysqli_error($dbc) . '<br><br>Query: ' . $query . '</p>';
	//print go back button
	echo "<div class=\"center\"> <button type=\"button\" onclick=\"location.href='https://kmzanoni.uwmsois.com/final/user_secret_page.php'\">Go Back</button></div>";
}

?>
</body>
</html>