<?php
$session = session_start();
include("conn.php");

$id = $_POST['id'];
$pass = $_POST['pass'];
$date = date("d/m/Y H:i:s");

$sql_login = 'SELECT * FROM users WHERE ID = "'.mysqli_real_escape_string($conn, $id).'" AND Password = "'.mysqli_real_escape_string($conn, $pass).'" ;';
$sql_update_lastlogin = 'UPDATE users SET Last_login = "'.mysqli_real_escape_string($conn, $date).'" WHERE ID = "'.mysqli_real_escape_string($conn, $id).'"; ';
$sql_update_login = 'SELECT * FROM users WHERE ID = "'.mysqli_real_escape_string($conn, $id).'" ;';

$query = mysqli_query($conn, $sql_login);
$row = mysqli_fetch_array($query);

if($row){
	mysqli_query($conn, $sql_update_lastlogin);
	$query_up = mysqli_query($conn, $sql_update_login);
	$rowupdate = mysqli_fetch_array($query_up);
	$_SESSION['id'] = $rowupdate['ID'];
	$_SESSION['fname'] = $rowupdate['Firstname'];
	$_SESSION['lname'] = $rowupdate['Lastname'];
	$_SESSION['address'] = $rowupdate['Address'];
	$_SESSION['lastlogin'] = $rowupdate['Last_login'];
	$_SESSION['img'] = $rowupdate['Image'];
	if($rowupdate['Authorize_level'] == 0){
		$_SESSION['Aut_lev'] = "Administrator";	
	}else{
		$_SESSION['Aut_lev'] = "User";
	}
	
	session_write_close();
	printf('<script> alert("Welcome %s %s!"); window.location.replace("/ppstorage/home.php");</script>',$_SESSION['fname'],$_SESSION['lname']);
	echo $date;
}else{
	echo '<script> alert("Something went wrong!"); window.location.replace("/ppstorage"); </script>';
}
$conn->close();
?>