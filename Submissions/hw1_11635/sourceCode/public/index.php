<?php
if (isset($_POST['login'])) 
{
	session_start();
	try 
	{
		require "config.php";
		require "common.php";

		$db = new PDO($dsn, $username, $password, $options);
        	
		$sql_text = "SELECT `username`,`password` FROM `users` WHERE `username`=\"".$_POST['username']."\" AND `password`=\"".$_POST['password']."\"";
		$stm_dep = $db->query($sql_text);
		$n1="";$n2="";$n3="";
		
		$_SESSION["usname"] = "";
		$_SESSION["uspass"] = "";
		while($row_dep = $stm_dep->fetch(PDO::FETCH_ASSOC)){
		 $_SESSION["usname"] = $row_dep["username"];
		 $_SESSION["uspass"] = $row_dep["password"];
		 break;
		}	
		if(!($_SESSION["usname"] == "" &&$_SESSION["uspass"]=="")){
		$message = "LOGIN SUCCESSFUL";
		echo "<script type='text/javascript'>alert('$message');</script>";
		header("Location:index.1.php");
		}
		else {
			$message = "LOGIN FAIL";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
	
		
		$db = null;
	}
	
	catch(PDOException $error) 
	{
		echo $sql . "<br>" . $error->getMessage();
	}
}?>


<?php include "templates/header.php"; ?>

<ul>
	<li><strong>Login</strong>
	<li><a href="create.php"><strong>Create</strong></a> - add a user</li>
	<li><a href="searchallproduct.php"><strong>Read</strong></a> - Search product</li>
</ul>
<form method="post">
	<label for="username">username</label>
	<input type="text" name="username" id="username">
	<label for="password">password</label>
	<input type="text" name="password" id="password">
	<input type="submit" name="login" value="login">
</form>

<?php include "templates/footer.php"; ?>