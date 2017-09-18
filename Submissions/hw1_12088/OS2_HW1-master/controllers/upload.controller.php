<?php

class UploadController {
    private $uploadImagePath;
    private $displayImagePath;

    function __construct() {
        $this->uploadImagePath = "../static/images";
        $this->displayImagePath = "static/images";
    }

    function uploadImage($name, $tempName) {
        $tempFilePath = "{$this->uploadImagePath}/{$name}";
        move_uploaded_file($tempName, $tempFilePath);

        return "{$this->displayImagePath}/{$name}";
    }

    function removeUploadImage($path) {
        unlink("../". $path);
    }
}
?>