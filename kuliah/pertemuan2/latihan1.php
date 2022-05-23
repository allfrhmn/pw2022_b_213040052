<?php 
// Pertemuan 2, belajar sintaks PHP

// NILAI
// angka (integer), tulisan (string), true/false (booelan)
echo 10; //integer
echo '<br>';
echo "allfiandi"; //string
echo '<br>';
echo false; //boolean null
echo '<hr>';
// VARIABEL
// Tempat menampung NILAI 
// awali dengan tanda $
// boleh mengandung angka, tidak boleh diawali angka
// tidak boleh spasi

$nama1 = 'Rahman';
echo $nama1;
echo '<br>';

// STRING
// '' , ""
$hari1 = "Jum'at";
echo $hari1;
echo "<br>";
echo 'Allfiandi: "Halo, semua!"';
echo '<br>';

// Escape Character
//  \
echo 'Allfiandi: "Selamat hari jum\'at"';
echo '<br>';
echo "Allfiandi: \Selamat hari jum'at";
echo '<hr>';

// Interpolasi
// Mencetak langsung isi variabel
// hanya bisa oleh ""
echo "Halo, nama saya $nama1";
echo '<br>';
echo 'Halo, nama saya $nama1';
echo '<hr>';

// Concat / Penggabung String
// Simbolnya adalah .
$nama_depan = 'Allfiandi';
$nama_blkng = 'Rahman';
echo $nama_depan." ".$nama_blkng;
echo '<hr>';

// OPERATOR
// Aritmatika
// +, -, *, /, % (modulo / modulus / sisa bagi)
echo 1 + 1; //Hasil dari 1 + 1 adalah 2 
echo '<br>';
echo 'Hasil dari 1 + 1 adalah'. 1 + 1;
echo '<br>';
echo (1 + 2) * 3 - 4; 
echo '<br>';
echo 10 % 5;
echo '<br>';
echo 1 + '1' + 1;
echo '<hr>';

// Perbandingan
// >, <, <=, >=, == !=
echo 1 < 5;
echo '<br>';
echo 1 == "1";
echo '<hr>';

// Identitas / Strict Comparison
// ===. !==
echo 1 === '1';
echo '<hr>';

//  Increment / Decrement
// tambah / kurang 1
// ++, --
$x = 10;
echo ++$x;
echo '<br>';
echo $x++;
echo '<hr>';
?>
