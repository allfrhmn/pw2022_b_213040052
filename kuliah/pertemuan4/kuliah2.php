<?php 
// definisikan masing-masing sisi kubus
$a = 9;
$b = 4;

// hitung masing-masing voulem kubus
$volume_a = pow($a, 3);
$volume_b = pow($b, 3);

// hitung total 2 volume
$total_ab = $volume_a + $volume_b;

// kembalikan nilai total
echo "Jumlah dari volume kubus A dengan sisi $a dan kubus B dengan sisi $b adalah $total_ab";

echo "<hr>";

// Deklarasi / definisi function
function totalVolumeDuaKubus($a, $b) {
    $volume_a = pow($a, 3);
    $volume_b = pow($b, 3);

    $total_ab = $volume_a + $volume_b;

    return "Jumlah dari volume kubus dengan sisi $a dan kubus dengan sisi $b adalah $total_ab";
}

// pemanggilan / eksekusi function
echo totalVolumeDuaKubus(9,4);
echo "<br>";
echo totalVolumeDuaKubus(10,20);
echo "<br>";
echo totalVolumeDuaKubus(5,6);

echo "<hr>";

// buat sebuah fungsi untuk menghitung luas segi tiga
echo luasSegiTiga(2,4); // Luas segi tiga dengan alas 2 dan tinggi 4 adalah 4

function luasSegiTiga($alas, $tinggi) {
    $luas = 1/2*$alas*$tinggi;
    return "Luas segi tiga dengan alas $alas dan tinggi $tinggi adalah $luas";
}

?>