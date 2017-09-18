<?php

require 'PdoDB.php';

$pid=$_POST["pidSend"];
$name = $_POST["p_name"];
$price = $_POST["p_price"];
$phave = $_POST["p_have"];
$info = $_POST["p_info"];
$newimgname = $pid.'.jpg';

$target = "../img/".$newimgname;
move_uploaded_file($_FILES["imgToUpload"]["tmp_name"], $target);

$pdodb		 =	new PdoDB();
$db = $pdodb->getDatabase();
$records = $db->prepare("UPDATE product SET pname = :p_name , pinfo = :p_info, pimgpath = :p_img, pprice = :p_price, phave = :p_have WHERE pid = :p_id");
$records->bindParam(':p_id', $pid);
$records->bindParam(':p_name', $name);
$records->bindParam(':p_info', $info);
$records->bindParam(':p_price', $price);
$records->bindParam(':p_have', $phave);
$records->bindParam(':p_img', $newimgname);
$records->execute();
echo json_encode(true);

?>