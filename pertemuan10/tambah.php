<?php
require 'functions.php';

// cek apakah tombol submit sudag ditekan / belum
if( isset($_POST["submit"]) ) {
   
    // cek apakah data berhasil ditambahkan / tidak
    if( tambah($_POST) > 0 ) {
        echo "
            <script>
                alert('Berhasil Menambahkan Data!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
           <script>
               alert('Gagal Menambahkan data!!!');
               document.location.href = 'tambah.php';
           </script>
        ";
    }


}


?>
<!DOCTYPE html>
<html>
<head>
     <title>Tambah data mahasiswa</title>
</head>
<body>
    <h1>Tambah data mahasiswa</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required placeholder="Masukkan Nama Lengkap">
            </li>
            <li>
                <label for="nrp">NRP : </label>
                <input type="text" name="nrp" id="nrp" required placeholder="Masukkan NRP">
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="text" name="email" id="email" required placeholder="Masukkan Email">
            </li>
            <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" id="jurusan" required placeholder="Masukkan Jurusan">
            </li>
            <li>
                <label for="gambar">Gambar : </label>
                <input type="text" name="gambar" id="gambar" required placeholder="Wallpaperbetter.jpg">
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data!</button>
            </li>
        </ul>


    </form>
</body>
</html>
