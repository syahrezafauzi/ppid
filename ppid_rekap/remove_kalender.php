<?php 

require_once('connect.php');
include('session_petugas.php');
$id_kalender = $_GET['id'];

$sql = "DELETE FROM jadwal WHERE id=$id_kalender";

if ($conn->query($sql) === TRUE) {
  echo '<script>window.location.href="list_kalender.php"</script>';
} else {
  echo "<script>alert('Error: . $sql . <br> . mysqli_error($conn)')</script>";
}

?>
