    <?php
    include 'koneksi.php'; // Include your database connection file

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $jurusan = $_POST['jurusan'];
        $alamat = $_POST['alamat'];

        $query = "INSERT INTO mahasiswa (nim, nama, jenis_kelamin, jurusan, alamat) 
                VALUES ('$nim', '$nama', '$jenis_kelamin', '$jurusan','$alamat')";

        if (mysqli_query($koneksi, $query)) {
            echo "Data berhasil dimasukkan";
            header("Location: index.php");
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
        }
        mysqli_close($koneksi);
    }
    ?>
