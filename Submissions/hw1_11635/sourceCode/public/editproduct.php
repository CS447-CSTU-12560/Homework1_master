<?php
	session_start();
	$_SESSION["check1"] = "";	
	$_SESSION["checkk"] = "";
	$_SESSION["check2"] = "";
?>
<?php
if (isset($_POST['submit'])) 
{

	try 
	{
		require "config.php";
		require "common.php";

		$db = new PDO($dsn, $username, $password, $options);
        	
		$sql_text = "SELECT * FROM product WHERE Name = \"". $_POST["Name"]."\" and Owner =\"".$_SESSION["usname"]."\"";
		$stm_dep = $db->query($sql_text);
		$n1="";$n2="";$n3="";
		$_SESSION["pname"] = "";
		$_SESSION["des"] = "";
		$_SESSION["pic"] = "";
		$_SESSION["price"] = "";
		$_SESSION["amount"] = "";	
		$_SESSION["checkk"] = "";
		$_SESSION["check1"] = "555";
		$_SESSION["check2"] = "555";
					
		while($row_dep = $stm_dep->fetch(PDO::FETCH_ASSOC)){
			$_SESSION["pname"]  =   $row_dep["Name"];
			$_SESSION["des"]    =   $row_dep["Description"];
			$_SESSION["pic"]    =   $row_dep["Picture"];
			$_SESSION["price"]  =   $row_dep["Price"];
			$_SESSION["amount"] =   $row_dep["Amount"];
		 break;
		}	
	}
	
	catch(PDOException $error) 
	{
		echo $sql . "<br>" . $error->getMessage();
	}
	
}?>
<?php
if (isset($_POST['submit1'])) 
{

	try 
	{
		require "config.php";
		require "common.php";

		$db = new PDO($dsn, $username, $password, $options);
		$imgFile = $_FILES['Picture1']['name'];
  		$tmp_dir = $_FILES['Picture1']['tmp_name'];
  		$imgSize = $_FILES['Picture1']['size'];
		  
		$upload_dir = 'img/'; // upload directory 
  		$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
  		$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
  		$userpic = rand(1000,1000000).".".$imgExt;
  		 if(in_array($imgExt, $valid_extensions))
   			{   
   				 if($imgSize < 5000000)
    				{
    					move_uploaded_file($tmp_dir,$upload_dir.$userpic);
   					}
			}
		$sql_text = "UPDATE `product` SET `Name`=\"".$_POST["Name1"]."\",`Description`=\"".$_POST["Description1"]."\",`Picture`=\"".$userpic."\",`Price`=\"".$_POST["Price1"]."\",`Amount`=\"".$_POST["Amount1"]."\" WHERE Owner =\"".$_SESSION["usname"]."\" and Name = \"".$_SESSION["pname"]."\"";
		$stm_dep = $db->query($sql_text);
		$n1="";$n2="";$n3="";
		$_SESSION["checkk"] = "111";
		$_SESSION["pname"] = "";
		$_SESSION["des"] = "";
		$_SESSION["pic"] = "";
		$_SESSION["price"] = "";
		$_SESSION["amount"] = "";	
		$_SESSION["checkk"] = "";
		$_SESSION["check2"] = "";
	
	}
	
	catch(PDOException $error) 
	{
		echo $sql . "<br>" . $error->getMessage();
	}
	
}?>

<?php include "templates/header.php"; ?>


<h2>edit product based on Name</h2>
<?php 
if($_SESSION["check1"] != ""){ ?>
	<form method="post" enctype="multipart/form-data">
		<label for="Name">Name = <?php echo $_SESSION["pname"] ?></label>
		<input type="text" name="Name1" id="Name">
		<label for="Description">Decription = <?php echo $_SESSION["des"] ?></label>
		<input type="text" name="Description1" id="Description">
		<label class="control-label">Picture = <?php echo $_SESSION["pic"] ?></label>
		<input class="input-group" type="file" name="Picture1" id="Picture1" accept="image/*">
		<label for="Price">Price = <?php echo $_SESSION["price"] ?></label>
		<input type="text" name="Price1" id="Price">
		<label for="Amount">Amount= <?php echo $_SESSION["amount"] ?></label>
		<input type="text" name="Amount1" id="Amount">
		<input type="submit" name="submit1" value="edit">
	</form>
<?php }
?>
<?php
if($_SESSION["check2"] == ""){ ?>
<form method="post">
	<label for="Name">Name</label>
	<input type="text" id="Name" name="Name">
	<input type="submit" name="submit" value="search">
</form>

<?php 
}
?>
<?php 
if (isset($_POST['submit1'])&& $_SESSION["checkk"] != "") 
{ ?>
	<blockquote><?php echo $_POST['Name1']; ?> successfully edit.</blockquote>
<?php 
} ?>

<a href="index.1.php">Back to home</a>

<?php include "templates/footer.php"; ?>