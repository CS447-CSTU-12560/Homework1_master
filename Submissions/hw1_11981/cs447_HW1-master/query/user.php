<?php
	require "dbConfig/database.php";

	class User {
		private $pdo;

		function __construct() {
			$database = new Database();
			$this->pdo = $database->connect();
		}

		function signIn($username, $password) {
			$query = $this->pdo->prepare('SELECT * FROM user WHERE username=:username AND password=:password');
			$query->bindValue(":username", $username);
			$query->bindValue(":password", $password);
			$query->execute();

			return $query;
		}
	}
?>