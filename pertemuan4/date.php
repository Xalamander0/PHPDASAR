<?php
// Date
// Untuk menampilkan tanggal dengan format tertentu
// echo date("l, d-M-Y");

// Time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 januari 1970
// echo time();
// echo date ("l", time()+172800);

// mktime
// membuat sendiri detik
// mktime(0,0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
echo date("l", mktime(0,0,0,5,03,2022));


// strtotime
// echo date("l", strtotime("25 aug 1985"));

?>