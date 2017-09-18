<?php
class PdoDB extends PDO
{

	function __construct()
	{
		
	}
	function getDatabase() 
	{
		$hostname = 'localhost';
		$dbName = 'cs447_asgn1';
		$dbusername = 'root';
		$dbpassword = '1234';

		try 
			{
			$db = new PDO("mysql:host=$hostname;dbname=$dbName; charset=utf8", $dbusername, $dbpassword);
			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $db;
		}
		catch(PDOException $e)
		{
			echo "Connection failed: " . $e->getMessage();
		}
	}
}
?>