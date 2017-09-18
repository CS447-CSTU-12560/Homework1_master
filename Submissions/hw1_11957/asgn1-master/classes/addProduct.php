<?php

require 'PdoDB.php';

$name = $_POST["p_name"];
$price = $_POST["p_price"];
$phave = $_POST["p_have"];
$info = $_POST["p_info"];
$img = "temp.jpg";

$pdodb		 =	new PdoDB();
$db = $pdodb->getDatabase();
$records = $db->prepare('INSERT INTO product (pname, pinfo, pimgpath, pprice, phave) VALUES(:p_name, :p_info, :p_imgpath, :p_price, :p_have)');
$records->bindParam(':p_name', $name);
$records->bindParam(':p_info', $info);
$records->bindParam(':p_price', $price);
$records->bindParam(':p_have', $phave);
$records->bindParam(':p_imgpath', $img);
$records->execute();

$last_id = $db->lastInsertId();

$newimgname = $last_id.'.jpg';

$target = "../img/".$newimgname;
if(move_uploaded_file($_FILES["imgToUpload"]["tmp_name"], $target)){
	$records = $db->prepare("UPDATE product SET pimgpath = :p_imgpath WHERE pid = :p_id");
	$records->bindParam(':p_imgpath', $newimgname);
	$records->bindParam(':p_id', $last_id);
	$records->execute();
}
echo json_encode(true);

?>