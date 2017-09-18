<?php

require "../configs/database.config.php";

class UserModel {
    private $pdo;

    function __construct() {
        $database = new Database();
        $this->pdo = $database->connect();
    }

    function hashPassword($password) {
        $hashed = md5($password);

        return $hashed;
    }

    function signIn($username, $password) {
        $hashedPassword = $this->hashPassword($password);
        $stmt = $this->pdo->prepare('SELECT * FROM users 
      WHERE username=:username AND password=:password ');
        $stmt->bindValue(':username', $username);
        $stmt->bindValue(':password', $hashedPassword);
        $stmt->execute();

        return $stmt;
    }
}
?>