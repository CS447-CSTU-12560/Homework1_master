
<?php session_start();?>
<?php
$conn = new mysqli("localhost","root","","mydb");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$sql =  "INSERT INTO `products`(`ID`, `name`, `desciption`, `image`, `price`, `amount`)
  VALUES ('','".$_POST['item_name']."','','".$_POST["item_picture"]."','".$_POST["item_price"]."','".$_POST["item_stock"]."')";




  if ($conn->query($sql) === TRUE) {


    Header("Location: user_page.php");
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }


$conn->close();


?>
