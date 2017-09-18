<?php
	$pdodb		=	new PdoDB();
	$db = $pdodb->getDatabase();

	$sql_cm_product = 'SELECT * FROM product';
	$product = $db->query($sql_cm_product);
?>