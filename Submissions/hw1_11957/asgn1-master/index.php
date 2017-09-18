<?php

session_start();

if($_SESSION["user"] == "")header("Location:login.php");

require 'classes/PdoDB.php';
require 'classes/dataProduct.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>รายการสินค้า</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>
  <script src="js/editProduct.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>

<div class="container">
  <h2>รายการสินค้า
  <button type="button" class="btn btn-primary btn-md" data-toggle="tooltip" style="float: right;" title="แก้ไขสินค้า" onClick="newProduct()">เพิ่มสินค้า</button>
  </h2>
  <table class="table table-hover">
    <thead>

		<tr>

			<th>รูปสินค้า</th>

			<th>ชื่อสินค้า</th>
			
			<th>รายละเอียดสินค้า</th>

			<th>ราคา</th>

			<th>จำนวนสินค้า</th>

			<th>Actions</th>

		</tr>

	</thead>

	<tbody>

		<?php foreach ($product as $row) { ?>

		<tr>

			<td><img src="img/<?php echo $row['pimgpath'];?>" height="75" width="75"></td>

			<td><?php print $row['pname']; ?></td>
			
			<td><?php print $row['pinfo']; ?></td>

			<td><?php print $row['pprice']; ?></td>

			<td><?php print $row['phave']; ?></td>

			<td>

				<div class="btn-group">

					<button type="button" class="btn btn-primary btn-sm" data-toggle="tooltip" title="แก้ไขสินค้า" onClick="editProduct(<?php echo $row['pid'];?>)">แก้ไข</button>

					<button type="button" class="btn btn-warning btn-sm" data-toggle="tooltip" title="ลบสินค้า" onClick="removeProduct(<?php echo $row['pid'];?>)">ลบ</button>

				</div>

			</td>

		</tr>

		<?php } ?>

	</tbody>
  </table>
</div>

</body>
</html>
