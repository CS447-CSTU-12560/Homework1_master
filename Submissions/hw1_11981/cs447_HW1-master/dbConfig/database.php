<?php
	class Database {
		private $server_name = "localhost";
		private $username = "suay";
		private $password = "1234";
		private $database_name = "justsaysweet";

		function connect() {
			$pdo = new PDO("mysql:host=" . $this->server_name . ";dbname=" . $this->database_name, $this->username, $this->password);
			$pdo->exec("set names utf8");
			return $pdo;
		}

	}
?>