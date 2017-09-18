<?php session_start();?>
<!DOCTYPE html>
<html>

<head>

<title>View Records</title>

</head>

<body>



<?php

/*

VIEW.PHP

Displays all data from 'players' table

*/



// connect to the database

include('connection.php');



// get results from database
$conn = new mysqli("localhost","root","","mydb");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql="SELECT * FROM products";
$result = $conn->query($sql);





// display data in table

echo "<p><b>View All</b> </p>";



echo "<table border='1' cellpadding='10'>";

echo "<tr> <th>ID</th> <th>Name</th> <th>price</th> <th>amount</th> <th>Picture</th></tr>";



// loop through results of database query, displaying them in the table

while($row = mysqli_fetch_array( $result )) {



// echo out the contents of each row into a table

echo "<tr>";

echo '<td>' . $row['ID'] . '</td>';

echo '<td>' . $row['name'] . '</td>';

echo '<td>' . $row['price'] . '</td>';

echo '<td>' . $row['amount'] . '</td>';

echo '<td>' . $row['image'] . '</td>';
echo '<td><a href="edit.php?id=' . $row['ID'] . '">Edit</a></td>';

echo '<td><a href="delete.php?id=' . $row['ID'] . '">Delete</a></td>';

echo "</tr>";

}



// close table>

echo "</table>";

?>

<p><a href="add.php">Add a new record</a></p>



</body>

</html>
