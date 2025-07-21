<?php
session_start();
 
if (!isset($_SESSION['email'])) {
    header("Location: login_system.php");
}

$mail=$_SESSION['email'];
?>