<?php 
// SUPERGLOBALS
// Variabel bawaan PHP yang bisa diakses di mana pun 
// Bentuknya Array Associative
// $_GET
// $_POST
// $_SERVER
// $_GET = ["nama" => "Allfiandi", "email" => "allfiandirhmn@gmail.com"];
// $_GET["nama"] = "Allfiandi";
// $_GET["email"] = "allfiandirhmn@gmail.com";
// var_dump($_GET);
?>
<!-- <h1>Halo, <?= $_GET["nama"]; ?></h1> -->

<ul>
    <li>
        <a href="kuliah_latihan2.php?nama=Allfiandi&npm=213040052&email=allfiandirhmn@gmail.com">Allfiandi</a>
    </li>
    <li>
        <a href="kuliah_latihan2.php?nama=Iqmal&npm=213050022&email=iqmaljiihan@gmail.com">Iqmal</a>
    </li>
    <li>
        <a href="kuliah_latihan2.php?nama=Rizal&npm=212010074&email=rizalramli@gmail.com">Rizal</a>
    </li>
</ul>