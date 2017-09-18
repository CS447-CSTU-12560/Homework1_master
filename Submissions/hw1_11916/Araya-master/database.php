<?php
	class Database {
		private $server_name = "localhost";
		private $username = "Supanut";
		private $password = "5709611916";
		private $database_name = "products";
		function connect() {
			$pdo = new PDO("mysql:host=" . $this->server_name . ";dbname=" . $this->database_name, $this->username, $this->password);
			$pdo->exec("set names utf8");
			return $pdo;
		}
	}
?>