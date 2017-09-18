<?php

class ProductDataSource {
    function createProductObject($name, $imageURL, $detail, $price, $amount) {
        return [
            'name' => $name,
            'imageURL' => $imageURL,
            'detail' => $detail,
            'price' => floatval($price),
            'amount' => intval($amount)
        ];
    }
}
?>