<?php

require "../models/product.model.php";
require "../dataSources/product.dataSource.php";

class ProductController {
    private $productModel;
    private $productDataSource;

    function __construct() {
        $this->productModel = new ProductModel();
        $this->productDataSource = new ProductDataSource();
    }

    private function isProductExist($productCount) {
        return $productCount > 0;
    }

    function getProductByID($productID) {
        $result = $this->productModel->getProductByID($productID);
        if($this->isProductExist($result->rowCount())) {
            return $result->fetch();
        }

        return null;
    }

    function getAllProducts() {
        $result = $this->productModel->getAllProducts();

        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    function deleteProduct($productID) {
        $result = $this->productModel->deleteProduct($productID);

        return $result->rowCount();
    }

    function addProduct($name, $imageURL, $detail, $price, $amount) {
        $product = $this->productDataSource->createProductObject($name, $imageURL, $detail, $price, $amount);
        $result = $this->productModel->addProduct($product);

        return $result->rowCount();
    }

    function updateProduct($name, $imageURL, $detail, $price, $amount, $productID) {
        $product = $this->productDataSource->createProductObject($name, $imageURL, $detail, $price, $amount);
        $result = $this->productModel->updateProduct($product, $productID);

        return $result->rowCount();
    }
}
?>