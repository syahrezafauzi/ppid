<?php 

require_once('connect.php');
include('session_petugas.php');
$id_dip = $_GET['id'];

$sql = "DELETE FROM dip WHERE id_dip=$id_dip";

if ($conn->query($sql) === TRUE) {
  echo '<script>window.location.href="list_dip.php"</script>';
} else {
  echo "<script>alert('Error: . $sql . <br> . mysqli_error($conn)')</script>";
}

?>

