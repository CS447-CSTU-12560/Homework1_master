<?php

	session_start();

	include("connect.php");

	 $_REQUEST['uname'];
	 $_REQUEST['psw'];

	

	$sql = "SELECT 
				* 
			FROM useraccount
			WHERE 
				username = '".$_REQUEST['uname']."' 
				AND password = '".$_REQUEST['psw']."'";
	$rs = $conn->query($sql) or die($conn->error);

	if($rs->num_rows == 0) {

		echo "<script>
				alert('Please check username and Password');
				window.location='login.html';
			</script>";

	} else {

		//$_SESSION['loginReady'] = "yes"; 
	   $data = $rs->fetch_array();
   	$_SESSION['userfname'] = $data['userfname'];
   	$_SESSION['userlname'] = $data['userlname'];

   	session_write_close();
		echo "<script>window.location='home.php'</script>";


	}




	


?>