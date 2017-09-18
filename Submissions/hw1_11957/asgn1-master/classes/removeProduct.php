<?php

require 'PdoDB.php';

session_start();

$pid=$_GET["q"];

$pdodb		=	new PdoDB();

$db = $pdodb->getDatabase();

$records =  $db->prepare("DELETE FROM product WHERE pid = :p_id");

$records->bindParam(':p_id', $pid);

$records->execute();

$results = $records->fetch(PDO::FETCH_ASSOC);

?>