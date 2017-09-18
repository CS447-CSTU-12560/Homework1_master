

<html>
<head>
	<title>Homepage</title>
</head>

<body>
<a href="add.html">Add New Data</a><br/><br/>

	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>Product</td>
		<td>Description</td>
		<td>Image</td>
		<td>Price</td>
		<td>Quantity</td>
	</tr>
	<?php
	include("config.php");
	$sql = ("SELECT * FROM product");
	$result = $conn->query($sql);
	while($res = mysqli_fetch_array($result)) {
		echo "<tr>";
		echo "<td>".$res['product_name']."</td>";
		echo "<td>".$res['description']."</td>";
		echo '<td>'.'<img src="'.$res['image'].'"width=100 height=100>'.'</td>';
		echo "<td>".$res['price']."</td>";
		echo "<td>".$res['quantity']."</td>";
		echo "<td><a href=\"edit.php?id=$res[product_id]\">Edit</a> | <a href=\"delete.php?id=$res[product_id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
	}
	?>
	</table>
</body>
</html>
