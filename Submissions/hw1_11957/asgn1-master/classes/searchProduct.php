<?php

require 'PdoDB.php';

session_start();



$pids=$_POST["pidSend"];

$pdodb		 =	new PdoDB();

$db = $pdodb->getDatabase();

$records = $db->prepare("SELECT * FROM product WHERE pid = :p_id");

$records->bindParam(':p_id', $pids);

$records->execute();

$results = $records->fetch(PDO::FETCH_ASSOC);

echo json_encode($results);

?>