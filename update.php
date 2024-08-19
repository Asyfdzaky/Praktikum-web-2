<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_mhs = $_POST['id_mhs'];
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];

    $update_query = "UPDATE mahasiswa SET 
        nim = '$nim',
        nama = '$nama',
        jenis_kelamin = '$jenis_kelamin',
        jurusan = '$jurusan',
        alamat = '$alamat'
        WHERE id_mhs = '$id_mhs'";

    if (mysqli_query($koneksi, $update_query)) {
        header("Location: index.php");
    } else {
        echo "Error updating record: " . mysqli_error($koneksi);
    }
}
?>
