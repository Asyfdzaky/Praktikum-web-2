<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Form Inputan Data</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="w-full max-w-md bg-white shadow-md rounded-lg p-8">
        <h2 class="text-2xl font-semibold text-center text-gray-800 mb-6">Form Input Data Mahasiswa</h2>
        
        <form method="post" action="simpan.php" class="space-y-4">
            <div>
                <label class="block text-gray-700">NIM</label>
                <input type="text" onkeyup="isi_otomatis()" name="nim" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>
            <div>
                <label class="block text-gray-700">Nama</label>
                <input type="text" name="nama" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>
            <div>
                <label class="block text-gray-700">Jenis Kelamin</label>
                <div class="flex space-x-4">
                    <label class="inline-flex items-center">
                        <input type="radio" name="jenis_kelamin" value="L" class="form-radio text-blue-500">
                        <span class="ml-2">Laki-laki</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="radio" name="jenis_kelamin" value="P" class="form-radio text-blue-500">
                        <span class="ml-2">Perempuan</span>
                    </label>
                </div>
            </div>
            <div>
                <label class="block text-gray-700">Jurusan</label>
                <select name="jurusan" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
                    <option value="TEKNIK INFORMATIKA">TEKNIK INFORMATIKA</option>
                    <option value="TEKNIK MESIN">TEKNIK MESIN</option>
                    <option value="TEKNIK KIMIA">TEKNIK KIMIA</option>
                </select>
            </div>
            <div>
                <label class="block text-gray-700">Alamat</label>
                <input type="text" name="alamat" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>
            <div class="text-center">
                <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400">SIMPAN</button>
            </div>
        </form>
    </div>
</body>

</html>
