<?php

require "../configs/database.config.php";

class ProductModel {
    private $pdo;

    function __construct() {
        $database = new Database();
        $this->pdo = $database->connect();
    }

    function getProductByID($productID) {
        $stmt = $this->pdo->prepare('SELECT * FROM products WHERE id=:id');
        $stmt->bindValue(':id', $productID);
        $stmt->execute();

        return $stmt;
    }

    function getAllProducts() {
        $stmt = $this->pdo->prepare('SELECT * FROM products');
        $stmt->execute();

        return $stmt;
    }

    function deleteProduct($productID) {
        $stmt = $this->pdo->prepare('DELETE FROM products WHERE id=:id');
        $stmt->bindValue(':id', $productID);
        $stmt->execute();

        return $stmt;
    }

    function addProduct($product) {
        $stmt = $this->pdo->prepare('INSERT INTO products(name, imageURL, detail, price, amount) VALUE 
         (:name, :imageURL, :detail, :price, :amount)');
        $stmt->bindValue(':name', $product["name"]);
        $stmt->bindValue(':imageURL', $product["imageURL"]);
        $stmt->bindValue(':detail', $product["detail"]);
        $stmt->bindValue(':price', $product["price"]);
        $stmt->bindValue(':amount', $product["amount"]);
        $stmt->execute();

        return $stmt;
    }

    function updateProduct($product, $productID) {
        $stmt = $this->pdo->prepare('UPDATE products SET name=:name, imageURL=:imageURL, 
                detail=:detail, amount=:amount, price=:price WHERE id=:id');
        $stmt->bindValue(':name', $product["name"]);
        $stmt->bindValue(':imageURL', $product["imageURL"]);
        $stmt->bindValue(':detail', $product["detail"]);
        $stmt->bindValue(':price', $product["price"]);
        $stmt->bindValue(':amount', $product["amount"]);
        $stmt->bindValue(':id', $productID);
        $stmt->execute();

        return $stmt;
    }
}
?>