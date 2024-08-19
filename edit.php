<?php
include 'koneksi.php';

$id = $_GET['id_mhs']; 
$mahasiswa_query = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id_mhs='$id'");
$mahasiswa = mysqli_fetch_array($mahasiswa_query);

$jurusan = array("TEKNIK INFORMATIKA", "TEKNIK MESIN", "TEKNIK KIMIA");

function active_radio_button($value, $input) {
    return ($value == $input) ? 'checked' : '';
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Mahasiswa</title>
</head>
<body>
    <h2>Edit Mahasiswa</h2>
    <form method="post" action="update.php">
        <input type="hidden" value="<?php echo $mahasiswa['id_mhs']; ?>" name="id_mhs">
        <table>
            <tr>
                <td>NIM</td>
                <td><input type="text" value="<?php echo $mahasiswa['nim']; ?>" name="nim"></td>
            </tr>
            <tr>
                <td>Name</td>
                <td><input type="text" value="<?php echo $mahasiswa['nama']; ?>" name="nama"></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <input type="radio" name="jenis_kelamin" value="L" <?php echo active_radio_button('L', $mahasiswa['jenis_kelamin']); ?>> Laki Laki
                    <input type="radio" name="jenis_kelamin" value="P" <?php echo active_radio_button('P', $mahasiswa['jenis_kelamin']); ?>> Perempuan
                </td>
            </tr>
            <tr>
                <td>Major</td>
                <td>
                    <select name="jurusan">
                        <?php foreach ($jurusan as $j): ?>
                            <option value="<?php echo $j; ?>" <?php echo ($mahasiswa['jurusan'] == $j) ? 'selected' : ''; ?>><?php echo $j; ?></option>
                        <?php endforeach; ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Address</td>
                <td><input type="text" value="<?php echo $mahasiswa['alamat']; ?>" name="alamat"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit" value="simpan">Simpan Perubahan</button>
                    <a href="index.php">Kembali</a>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
