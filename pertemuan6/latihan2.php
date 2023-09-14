<?php
$mahasiswa = ["ikhsan", "08080808", "ikhsan@gmail.com", "teknik informatika"]
?>
<!DOCTYPE html>
<html>
<head>
       <title>Document</title>
</head>
<body>

<?php foreach( $mahasiswa as $a ) : ?>
    <h1><?= $a; ?></h1>
<?php endforeach; ?> 
    
</body>
</html>











