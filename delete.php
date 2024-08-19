<?php
include 'koneksi.php';
$id_mhs = $_GET['id_mhs'];
$query = "DELETE FROM mahasiswa WHERE id_mhs='$id_mhs'";
mysqli_query($koneksi, $query);
header("Location: index.php");
?>
