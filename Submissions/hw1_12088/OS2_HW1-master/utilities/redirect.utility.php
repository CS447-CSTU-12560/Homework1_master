<?php

function redirect($destination) {
    header("Location: $destination");
    die();
}
?>