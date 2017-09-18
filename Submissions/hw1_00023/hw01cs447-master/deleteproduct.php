<?php

	session_start();

	include("connect.php");


	$idproduct = $_REQUEST['idproduct'];

$sql = "DELETE FROM lpstore WHERE idproduct = $idproduct";
echo $sql;
if (mysqli_query($conn, $sql)) {
    		echo "<script>
				alert('ลบรายการสำเร็จ');
				window.location='main.php';
			</script>";

} else {
echo "<script>
				alert('ไม่สามารถทำรายการได้');
				window.location='home.php';
			</script>";
}

mysqli_close($conn);


	


?>