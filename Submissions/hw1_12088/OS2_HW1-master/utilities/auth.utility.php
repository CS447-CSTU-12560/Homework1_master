<?php

function isSignIn() {
    return isset($_SESSION["username"]);
}
?>