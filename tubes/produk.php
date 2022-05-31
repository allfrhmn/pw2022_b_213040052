<?php
// session_start();

// if (!isset($_SESSION["login"])) {
//     header("Location: login.php");
//     exit;
// }
require 'functions.php';
$produk = query("SELECT * FROM produk");

// jika tombol cari klik
if (isset($_GET["cari"])) {
    $keyword = $_GET["keyword"];
    $query = "SELECT * FROM produk WHERE
                nama LIKE '%$keyword%' OR
                jenis LIKE '%$keyword%'
            ";
    $produk = query($query);
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Pictimart</a>
            <button class="navbar-toggler" type="button">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="admin.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="produk.php">Produk</a>
                    </li>
                </ul>
            </div>

            <div class="text-end">
                <a href="logout.php" class="btn btn-danger">Logout</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <h1>Daftar Produk</h1>
        <a href="tambah.php" class="btn btn-info my-3"><i class="bi bi-plus-circle"></i></a>

        <div class="row mt-4">
            <div class="col-8">
                <form action="" method="get">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="keyword" placeholder="cari..." autocomplete="off">
                        <button class="btn btn-primary" type="submit" name="cari">Cari!</button>
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-dark table-striped-columns">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($produk as $prod) { ?>
                    <ul>
                        <tr class="align-middle">
                            <th scope="row"><?= $no++; ?></th>
                            <td>
                                <img src="img/<?= $prod["gambar"]; ?>" width="100">
                            </td>
                            <td><?= $prod["nama"]; ?></td>
                            <td><?= $prod["jenis"]; ?></td>
                            <td><?= $prod["stok"]; ?></td>
                            <td><?= $prod["harga"]; ?></td>
                            <td>
                                <a href="ubah.php?id=<?= $prod["id"]; ?>" class="btn btn-warning"><i class="bi bi-arrow-repeat"></i></a>
                                <hr>
                                <a href="hapus.php?id=<?= $prod["id"]; ?>" class="btn btn-danger" onclick="return confirm('Apakah data anda akan dihapus ?')"><i class="bi bi-x"></i></a>
                            </td>
                        </tr>
                    </ul>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>