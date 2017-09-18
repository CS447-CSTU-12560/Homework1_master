
<?php session_start();?>

<?php

if (!$_SESSION["ID"]){

	  Header("Location: index.php");

}else{?>
	<!doctype html>
	<html>
	<head>
	<meta charset="UTF-8">
	<title>User page</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>

<?php
include('connection.php');



// get results from database
$conn = new mysqli("localhost","root","","mydb");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql="SELECT * FROM products";
$result = $conn->query($sql);





// display data in table




echo "<table border='1' cellpadding='10'width=1000height=1000>";

echo "<tr> <th>ID</th> <th>Name</th> <th>price</th> <th>amount</th> <th>Picture</th></tr>";



// loop through results of database query, displaying them in the table

while($row = mysqli_fetch_array( $result )) {


$image_get=$row['image'];


// echo out the contents of each row into a table

echo "<tr>";

echo '<td>' . $row['ID'] . '</td>';

echo '<td>' . $row['name'] . '</td>';

echo '<td>' . $row['price'] . '</td>';

echo '<td>' . $row['amount'] . '</td>';

echo '<td>'. '<img src="'.$image_get.'"width=30height=40>' .'</td>';

echo '<td><a href="edit_form.php? id=' . $row['ID'] . '">Edit</a></td>';

echo '<td><a href="delete.php?id=' . $row['ID'] . '">Delete</a></td>';

echo "</tr>";



}



// close table>

echo "</table>";




?>









    <p><strong>
			<li><a href="add.php">Add New Product</a></li>


    <li><a href="logout.php">Log out</a></li>
	</strong></p>

</body>
</html>
<?php }?>
