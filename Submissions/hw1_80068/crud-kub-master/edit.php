
<?php session_start();?>
<?php
$conn = new mysqli("localhost","root","","mydb");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_REQUEST['edit_id'];
echo $id ;
$sql =  "UPDATE products SET
name='".$_POST["item_name"]."' ,
image='".$_POST["item_picture"]."' ,
price='".$_POST["item_price"]."' ,
amount='".$_POST["item_stock"]."'
 WHERE ID =$id";





  if ($conn->query($sql) === TRUE) {


    Header("Location: user_page.php");
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }


$conn->close();


?>
