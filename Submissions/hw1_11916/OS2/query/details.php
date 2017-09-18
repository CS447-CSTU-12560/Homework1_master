<?php
 	require "database.php";

 	class product{
 		private $pdo;

 		function __construct(){
 			$database = new Database();
 			$this->pdo = $database->connect();
 		}

 		function allProduct() {
			$query = $this->pdo->prepare('SELECT * FROM products');
			$query->execute();
			return $query;
		}

		function oneProduct($name){
			$query = $this->pdo->prepare('SELECT * FROM `products` WHERE name= :name');
			$query->bindValue(":name" , $name);
			$query->execute();
			return $query;
		}

		function deleteProduct($name) {
			$query = $this->pdo->prepare('DELETE FROM `products` WHERE name= :name');
			$query->bindValue(":name" , $name);
			$query->execute();
			return $query;
		}

		function addProduct($name,$description,$picture,$price,$amount) {
			$query = $this->pdo->prepare('INSERT INTO `products`(`Name`, `Description`, `Picture`, `Price`, `Amount`) VALUES (:name, 
				:description,:picture,:price,:amount)');

			$query->bindValue(":name" , $name);
			$query->bindValue(":description" , $description);
			$query->bindValue(":picture" , $picture);
			$query->bindValue(":price" , $price);
			$query->bindValue(":amount" , $amount);
			$query->execute();
			return $query;
		}

		function editProduct($name,$description,$picture,$price,$amount) {
			$query = $this->pdo->prepare('UPDATE `products` SET Description=:description,Price=:price,Picture=:picture,Amount=:amount WHERE  Name=:name ');

			$query->bindValue(":name" , $name);
			$query->bindValue(":description" , $description);
			$query->bindValue(":picture" , $picture);
			$query->bindValue(":price" , $price);
			$query->bindValue(":amount" , $amount);

			$query->execute();
			return $query;
		}

 	}