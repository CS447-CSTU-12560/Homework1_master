<?php
	session_start();
	require 'classes/PdoDB.php';
	
	$pdodb		 =	new PdoDB();
	$db = $pdodb->getDatabase();
	
	$username = $_GET["q"];
	$psw = $_GET["r"];
	
	$sql_user='SELECT username,password FROM account WHERE username=:uname';
	$records =  $db->prepare($sql_user);
	$records->bindParam(':uname', $username);
	$records->execute();
	$result = $records->fetch(PDO::FETCH_ASSOC);
	//if(password_verify($psw, $results['password']))
	if($psw === $result['password']){
		echo "T";
		$_SESSION["user"] = $username;
		session_write_close();
	}
?>