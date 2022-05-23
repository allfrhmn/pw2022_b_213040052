<?php 
$mahasiswa = [
    ["Allfiandi Rahman", "213040052", "allfiandi.213040052@mail.unpas.ac.id", "Teknik Informatika"],
    ["Iqmal Mipmar", "213050022", "iqmal.213050022@gmail.com", "Teknik Lingkungan"],
    ["Rijal Ramli", "211030002", "rijal.211030002@yahoo.co.id", "Manajemen Bisnis"],
    ["Mahardika Fajrin", "212050034", "mahardikafjrn@gmail.com", "Hubungan Internasional"]
];
?>

<?php foreach($mahasiswa as $mhs) { ?>
    <ul>
        <li>Nama: <?php echo $mhs[0] ?></li>
        <li>NPM: <?php echo $mhs[1] ?></li>
        <li>Email: <?php echo $mhs[2] ?></li>
        <li>Jurusan: <?php echo $mhs[3] ?></li>
    </ul>
<?php } ?>