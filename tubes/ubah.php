<?php
require 'functions.php';

// Query data produk berdasarkan id
$id = $_GET["id"];
$prod = query("SELECT * FROM produk WHERE id = $id")[0];

// cek apakah tombol ubah sudah diklik
if (isset($_POST["ubah"])) {
    if (ubah($_POST) > 0) {
        echo "<script>
                alert ('data berhasil diubah!');
                document.location.href = 'produk.php';
            </script>";
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Ubah Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <h1>Form Ubah Data Produk</h1>

        <a href="produk.php" class="btn btn-light my-3">Kembali Ke Daftar Produk</a>
        <div class="row mt-3">

            <div class="col-8">

                <form action="" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <input type="hidden" name="id" value="<?= $prod["id"]; ?>">
                    </div>

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control border-warning" id="nama" name="nama" required value="<?= $prod["nama"]; ?>">
                    </div>

                    <div class="mb-3">
                        <label for="jenis" class="form-label">Jenis</label>
                        <input type="text" class="form-control border-warning" id="jenis" name="jenis" value="<?= $prod["jenis"]; ?>">
                    </div>

                    <div class="mb-3">
                        <label for="stok" class="form-label">Stok</label>
                        <input type="text" class="form-control border-warning" id="stok" name="stok" value="<?= $prod["stok"]; ?>">
                    </div>

                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="text" class="form-control border-warning" id="harga" name="harga" value="<?= $prod["harga"]; ?>">
                    </div>

                    <div class="mb-3">
                        <input type="hidden" name="gambarLama" value="<?= $prod["gambar"]; ?>">
                        <label for="gambar" class="form-label">Gambar</label>
                        <input type="file" class="form-control border-warning" id="gambar" name="gambar" value="<?= $prod["gambar"]; ?>">
                        <img src="img/<?= $prod["gambar"]; ?>" width="120" style="display: block;" class="img-preview">
                    </div>

                    <button type="submit" name="ubah" class="btn btn-warning">Ubah Data Produk</button>

                </form>

            </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>