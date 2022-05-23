<?php 
// ARRAY
// Array adalah variabel yang dapat menyimpan lebih dari satu nilai sekaligus.

$hari1 = "Senin";
$hari2 = "Selasa";
$hari7 = "Minggu";

$bulan1 = "Januari";
$bulan12 = "Desember";

$mahasiswa = "Allfiandi";

// Membuat ARRAY
$hari = ["Senin", "Selasa", "Rabu", "Kamis", "Jum'at"]; // Cara baru
$bulan = array("Januari", "Februari", "Maret"); // Cara lama
$myArray = [100, "Allfiandi", true];


// Menampilkan Array
// menampilkan 1 elemen menggunakan index, dimulai dari 0
echo $hari[1];
echo "<br>";
echo $bulan[2];
echo "<hr>";

// Menampilkan semua isi array seklaigus
// var_dump() atau print_r()
// khusus untuk debugging
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<hr>";

// Mencetak semua isi array menggunakan looping
// for 
for($i = 0; $i < count($hari); $i++) {
    echo $hari[$i];
    echo "<br>";
}
echo "<hr>";

// foreach 
foreach($bulan as $b) {
    echo $b;
    echo "<br>";
}
echo "<hr>";

// Memanipulasi Array
// Menambahkan elemen di akhir array
$hari[] = "Jum'at";
$hari[] = "Sabtu";
var_dump($hari);
?>