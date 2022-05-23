<?php
// Array Associative
// Array yang indexnya berupas string, yang berpasangan dengan nilainya.
$mahasiswa = [
    [
        "nama" => "Allfiandi Rahman", 
        "npm" => "213040052", 
        "email" => "allfiandi.213040052@mail.unpas.ac.id", 
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Iqmal Mipmar Jiihan Andrie", 
        "npm" => "213050022", 
        "email" => "iqmal.213050022@gmail.com", 
        "jurusan" => "Teknik Lingkungan"
    ],
    [
        "nama" => "Rizal Ramli", 
        "npm" => "211030074", 
        "email" => "rizal.211030074@yahoo.co.id", 
        "jurusan" => "Manajemen Ekonomi"
    ],
    [
        "nama" => "Mahardika Fajrin Hadiansyah", 
        "npm" => "212010001", 
        "email" => "mahardikafjrn@gmail.com", 
        "jurusan" => "Hubungan Internasional"
    ]
];

// var_dump($mahasiswa[3]["email"]);
?>

<?php foreach($mahasiswa as $mhs) { ?>
    <ul>
        <li>Nama: <?php echo $mhs["nama"] ?></li>
        <li>NPM: <?php echo $mhs["npm"] ?></li>
        <li>Email: <?php echo $mhs["email"] ?></li>
        <li>Jurusan: <?php echo $mhs["jurusan"] ?></li>
    </ul>
<?php } ?>

<?php ?>