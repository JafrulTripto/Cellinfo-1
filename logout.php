<?php

session_start();

$_SESSION = array();

session_destroy();

header("Location: Home1.php");


?>