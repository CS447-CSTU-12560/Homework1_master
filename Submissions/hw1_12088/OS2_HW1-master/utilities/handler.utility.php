<?php
require "redirect.utility.php";

class Handler {

    private function handleEvent($status, $destinationIfSuccess, $errorMessage) {
        if($status) {
            redirect($destinationIfSuccess);
        } else {
            echo "<script>alert('{$errorMessage}')</script>";
        }
    }

    function handleAddEvent($status) {
        $destinationIfSuccess = "product";
        $errorMessage = "Adding product isn\'t complete";

        $this->handleEvent($status, $destinationIfSuccess, $errorMessage);
    }

    function handleUpdateEvent($status) {
        $destinationIfSuccess = "../product";
        $errorMessage = "Updating product isn\'t complete";

        $this->handleEvent($status, $destinationIfSuccess, $errorMessage);
    }

    function handleDeleteEvent($status) {
        $destinationIfSuccess = "product";
        $errorMessage = "Deleting product isn\'t complete";

        $this->handleEvent($status, $destinationIfSuccess, $errorMessage);
    }

    function handleSignInEvent($status) {
        $destinationIfSuccess = "home";
        $errorMessage = "Username or Password is incorrect";

        $this->handleEvent($status, $destinationIfSuccess, $errorMessage);
    }
}
?>