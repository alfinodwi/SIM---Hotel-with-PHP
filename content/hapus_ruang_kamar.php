<?php
  require_once 'lib/connect.php';

  $id = $_GET['id'];

  $result = mysqli_query($connect, "DELETE FROM ruang_kamar WHERE idruang_kamar=$id");

  header("Location:edit_ruang_kamar.php");
?>

