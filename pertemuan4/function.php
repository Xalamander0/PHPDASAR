<?php
function salam($waktu, $nama) {
    return "selamat $waktu, $nama!";
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>latihan Function</title>
</head>
<body>
    <h1><?= salam("pagi", "ikhsan"); ?></h1>
</body>
</html>
