<?php
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");
?>
<!DOCTYPE html>
<html>
<head>
     <title>Halaman Admin</title>
     <style>
          .tambah a{
               background-color: cyan;
               padding: 10px;
               border: 1px solid green;
               border-radius: 20px; 
               color: black;
               text-decoration: none;
          }
          .tambah a:hover{
               transition: 0.4s ease;
               background-color: black;
               color: cyan;
          }
          a{
               text-decoration: none;
          }
          a:hover{
               transition: 0.4s ease;
               color: cyan;
          }
     </style>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<div class="tambah">
<a href="tambah.php">+ Tambah data mahasiswa</a>
</div>
<br></br>

<table border="1" cellpadding="10" cellspacing="0">

<tr>
     <th>No.</th>
     <th>Aksi</th>
     <th>Gambar</th>
     <th>Nama</th>
     <th>NRP</th>
     <th>Email</th>
     <th>Jurusan</th>
</tr>

<?php $i = 1; ?>
<?php foreach( $mahasiswa as $row ) : ?>
<tr>
     <td><?= $i; ?></td>
     <td>
          <a href="">Ubah</a> |
          <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yang bener mau dihapus?');">Hapus</a>
     </td>
     <td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
     <td><?= $row["nrp"]; ?></td>
     <td><?= $row["nama"]; ?></td>
     <td><?= $row["email"]; ?></td>
     <td><?= $row["jurusan"]; ?></td>
</tr>
<?php $i++; ?>
<?php endforeach; ?>
</table>

</body>
</html>

