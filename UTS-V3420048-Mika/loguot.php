<?php
session_start();
session_destroy();
header("Location:regislogin.php");
?>