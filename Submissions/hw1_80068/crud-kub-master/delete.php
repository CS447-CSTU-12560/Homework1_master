<?php session_start();?>
<?php



$conn = new mysqli("localhost","root","","mydb");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_REQUEST['id'];


$sql = "DELETE FROM products WHERE ID = $id";

if ($conn->query($sql) === TRUE) {
  echo "<script>";

      echo "alert(\" delete\");";
      echo "window.history.back()";
  echo "</script>";

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();

?>
