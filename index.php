<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Mahasiswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 p-6">
    <div class="container mx-auto">
        <h2 class="text-3xl font-semibold text-center text-gray-800 mb-6">List Mahasiswa</h2>
        
        <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
            <thead>
                <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                    <th class="py-3 px-6 text-left">NO</th>
                    <th class="py-3 px-6 text-left">NIM</th>
                    <th class="py-3 px-6 text-left">NAMA</th>
                    <th class="py-3 px-6 text-left">GENDER</th>
                    <th class="py-3 px-6 text-left">JURUSAN</th>
                    <th class="py-3 px-6 text-left">Action</th>
                </tr>
            </thead>
            <tbody class="text-gray-600 text-sm font-light">

                <?php
                include 'koneksi.php';

                $mahasiswa = mysqli_query($koneksi, "SELECT * from mahasiswa");
                $no = 1;

                foreach ($mahasiswa as $row) {
                    $jenis_kelamin = $row['jenis_kelamin'] == 'P' ? 'Perempuan' : 'Laki-laki';
                    echo "<tr class='border-b border-gray-200 hover:bg-gray-100'>
                            <td class='py-3 px-6 text-left whitespace-nowrap'>".$no."</td>
                            <td class='py-3 px-6 text-left'>".$row['nim']."</td>
                            <td class='py-3 px-6 text-left'>".$row['nama']."</td>
                            <td class='py-3 px-6 text-left'>".$jenis_kelamin."</td>
                            <td class='py-3 px-6 text-left'>".$row['jurusan']."</td>
                            <td class='py-3 px-6 text-left'>
                                <a href='edit.php?id_mhs=". $row['id_mhs'] ."' class='text-blue-500 hover:underline'>Edit</a>
                                <a href='delete.php?id_mhs=". $row['id_mhs'] ."' class='text-red-500 hover:underline ml-4'>Delete</a>
                            </td>
                        </tr>";
                    $no++;
                }
                ?>

            </tbody>
        </table>
        <div class="mt-6">
            <a href="from.php" class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600">Tambahkan Data</a>
        </div>
    </div>
</body>

</html>
