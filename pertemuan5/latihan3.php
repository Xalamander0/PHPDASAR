<?php
$mahasiswa = [
["ikhsan", "09080922", "teknik planogi", "ikhsan@gmail.com"],
["Robert", "043040023", "teknik informatika", "Robertmawlarobbany@gmail.com"],
["doddy", "03304001", "teknik industri", "doddy@yahoo.com"]
];

?>
<!DOCTYPE html>
<html>
<head>
        <title>Daftar mahasiswa</title>
</head>
<body>
    
<h1>daftar mahasiswa</h1>

<?php foreach( $mahasiswa as $mhs ) : ?>
<ul>
    <li>nama : <?= $mhs[0]; ?></li>
    <li>NRP : <?= $mhs[1]; ?></li>
    <li>jurusan : <?= $mhs[2]; ?></li>
    <li>email : <?= $mhs[3]; ?></li>
</ul>
<?php endforeach; ?>





</body>
</html>