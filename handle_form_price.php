<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Price Search</title>
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
include('mysqli_connect.php');

//Get user input minimum price and maximum price
$minvalue = $_POST['min_value'];
$maxvalue = $_POST['max_value'];

//Formulate select command using form data
$query = "SELECT * from products WHERE price <= $maxvalue AND price >= $minvalue ORDER BY price";

$result = mysqli_query($dbc, $query);

//Count number of returned rows
$num = mysqli_num_rows($result);

//Next,we can close the $dbc object
mysqli_close($dbc);

if ($result){
	
	//Print number of results
	echo "<header><h3>Crystal Clear <button class= \"btn\" onclick=\"window.location.href='logout.php';\">Log out</button></h3></header>";
	echo "<h4>Number of crystals with a price between $" . $minvalue . " and $" .  $maxvalue . ": " . $num . "</h4>";
	
	if ($num > 0){
		echo '<table width="100%">
		<thread>
		<tr>
			<th align-content="left">Image</th>
			<th align="left">Crystal Name</th>
			<th align="left">Crystal Powers</th>
			<th align="left">Price</th>
			<th align="left">Add To Cart</th>
		</tr>
		</thread>
		<tbody>';
	} else {
		echo "<h4>NA</h4>";
	}
	
	//Present the result in table
	while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
		echo '<form action = "add_to_cart.php" method="post">
		<tr>
		<td align-content="left"><img src="'. $row['image'].'" alt="No Image" width="100px" height="80px"></td>
		<td align="left"><input type="hidden" name="name" value="' . $row['name'] . '">'. $row['name'] . '</td>
		<td align="left">' . $row['description'] . '</td>
		<td align="left"><input type="hidden" name="price" value="$' . $row['price'] . '">$'.$row['price'].'</td>
		<td><button type="submit" name="add">Add to Cart</button></td>
		</tr>
		</form>';
		
	}

	echo '</tbody></table>';
	echo "<br><h4> Search Completed.</h4> <br>";
	echo " <div class=\"center\"><button type=\"button\" onclick=\"location.href='https://kmzanoni.uwmsois.com/final/user_secret_page.php'\">Go Back</button></div>";
	
} else {
	echo '<h4>The current search could not be retrived.</h4>';
	//echo '<p>' . mysqli_error($dbc) . '<br><br>Query: ' . $query . '</p>';

	echo "<div class\"center\"> <button type=\"button\" onclick=\"location.href='https://kmzanoni.uwmsois.com/final/user_secret_page.php'\">Go Back</button></div>";
}
?>
</body>
</html>