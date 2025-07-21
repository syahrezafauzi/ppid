<?php
 
$server = "localhost";
$user = "info1_users1";
$pass = "@Ptx4869";
$database = "info1_kalender";
 
$conn = mysqli_connect($server, $user, $pass, $database);
 
if (!$conn) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}
 
?>