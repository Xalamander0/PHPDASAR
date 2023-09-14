<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Form Sederhana</title>
</head>
<body>
    <form>
        <div>
            <label>Nama</label> <br>
            <input name="nama" type="text" placeholder="Masukkan nama">
        </div>
        <div>
            <label>Alamat</label> <br>
            <input name="alamat" type="text" placeholder="Masukkan alamat">
        </div>
        <div>
            <label>nomer telepon</label> <br>
            <input name="nomertelepon" type="text" placeholder="Masukkan nomer telepon">
        </div>
        <div>
            <button>Submit</button>
        </div>
        <?php # membuka tag PHP

$nama = @$_GET['nama'];
$alamat = @$_GET['alamat'];
$nomertelepon = @$_GET['nomertelepon'];

# di sini nanti kita akan tampilkan variabel $nama dan $alamat
# ...
# ...

# di sini nanti kita akan tampilkan variabel $nama dan $alamat
if ($nama) {
    echo "<strong>Nama:</strong> {$nama} ";
}

if ($alamat) {
    echo "<strong>Alamat:</strong> {$alamat} ";
}

if ($nomertelepon) {
    echo "<strong>nomer telepon:</strong> {$nomertelepon} ";
}
# jangan lupa tutup tag PHP
?>
    </form>
</body>
</html>