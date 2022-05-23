<?php
// 4 - FUNCTION
// built-in function

// date()
// untuk mengetahui waktu saat ini
// default timezone: UTC (-7 jam)
echo date("l, j F Y");
echo "<br>";
echo date("l", time());
echo "<hr>";

// time
// UNIX Timestap / EPOCH Time
// Detik yang sudah berlalu sejak 1 Januari 1970
echo time();
echo "<br>";
echo time()+60*60*24;
echo "<hr>";
echo date("l", time()-60*60*24*100);
echo "<hr>";

// mktime()
// membuat waktu berdasarkan format
// mktime(0, 0, 0, 0, 0, 0)
// jam, menit, detik, bulan, tanggal, tahun
echo mktime(10,45,0,3,5,2022);
echo "<br>";
echo date("l",mktime(0,0,0,6,19,2002));
echo "<br>";
echo strtotime("19 june 2002");
echo "<br>";
echo mktime(0,0,0,6,19,2002);
echo "<hr>";

// Fungsi Matematika
// pow() untuk pangkat
echo pow(2, 3);
echo "<br>";
echo rand(1, 10);
echo "<br>";
// pembulatan
echo round(2.7); // pembulatan ke nilai terdekat
echo "<br>";
echo ceil(2.1); // ke atas (ceiling / langit2)
echo "<br>";
echo floor(2.9); // ke bawah (floor / lantai)

?>
