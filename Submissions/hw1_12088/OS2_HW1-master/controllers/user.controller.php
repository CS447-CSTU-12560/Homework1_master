<?php

require "../models/user.model.php";

class UserController {
    private $userModel;

    function __construct() {
        $this->userModel = new UserModel();
    }

    function signIn($username, $password) {
        $result = $this->userModel->signIn($username, $password);
        $loginStatus = $this->isSignInComplete($result->rowCount());
        if($loginStatus) {
            $this->storeUserInSession($result->fetch());
        }

        return $loginStatus;
    }

    function isSignInComplete($count) {
        return $count > 0;
    }

    function storeUserInSession($userData) {
        $_SESSION["username"] = $userData["username"];
    }
}
?>