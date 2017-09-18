<?php
require "../utilities/redirect.utility.php";

session_start();
session_destroy();
redirect("home");
?>