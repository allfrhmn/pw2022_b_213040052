<?php 
$mahasiswa = [
    [
        "nama" => "Allfiandi Rahman",
        "npm" => "213040052", 
        "email" => "allfiandi.213040052@mail.unpas.ac.id", 
        "jurusan" => "Teknik Informatika",
        "gambar" => "img/1.jpg"
    ],
    [
        "nama" => "Iqmal Mipmar Jiihan Andrie", 
        "npm" => "213050022", 
        "email" => "iqmal.213050022@gmail.com", 
        "jurusan" => "Teknik Lingkungan",
        "gambar" => "img/2.jpg"
    ],
    [
        "nama" => "Rizal Ramli", 
        "npm" => "211030074", 
        "email" => "rizal.211030074@yahoo.co.id", 
        "jurusan" => "Manajemen Ekonomi",
        "gambar" => "img/3.jpg"
    ],
    [
        "nama" => "Mahardika Fajrin Hadiansyah", 
        "npm" => "212010001", 
        "email" => "mahardikafjrn@gmail.com", 
        "jurusan" => "Hubungan Internasional",
        "gambar" => "img/4.jpg"
    ]
];
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Daftar Mahasiswa</title>
  </head>
  <body>

  <div class="container">
      <h1>Daftar Mahasiswa</h1>
      <a href="#" class="btn btn-primary my-3">Tambah Data Mahasiswa</a>
      <table class="table table-responsive table bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Gambar</th>
                <th scope="col">Nama</th>
                <th scope="col">NPM</th>
                <th scope="col">Email</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php $no = 1; foreach($mahasiswa as $mhs) { ?>
                <ul>
                    <tr class="align-middle">
                    <th scope="row"><?= $no++; ?></th>
                            <td>
                                <img src="<?= $mhs["gambar"];?>" width="50px" class="rounded-circle">
                            </td>
                            <td><?= $mhs["nama"];?></td>
                            <td><?= $mhs["npm"];?></td>
                            <td><?= $mhs["email"];?></td>
                            <td><?= $mhs["jurusan"];?></td>
                            <td>
                            <a href="" class="btn badge bg-success">edit</a>
                            <a href="" class="btn badge bg-danger" onclick="return confirm('Apakah data anda akan dihapus ?')">delete</a>
                            </td>
                    </tr>
                </ul>
                <?php } ?>
        </tbody>
        </table>
  </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>