<?php
require 'functions.php';

if (isset($_POST["registrasi"])) {
    if (registrasi($_POST) > 0) {
        echo "<script>
                alert ('data berhasil ditambahkan!');
                document.location.href = 'login.php';
            </script>";
    } else {
        echo "user gagal ditambahkan";
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Form Registrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <h1>Form Registrasi</h1>
        <div class="row mt-3">
            <div class="col-8">
                <form action="" method="post">
                    <div class="card">
                        <div class="card-body">

                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control border-dark" name="username" autofocus autocomplete="off" required>
                            </div>

                            <div class="mb-3">
                                <label for="password1" class="form-label">Password</label>
                                <input type="password" class="form-control border-dark" name="password1" required>
                            </div>

                            <div class="mb-3">
                                <label for="password2" class="form-label">Konfirmasi Password</label>
                                <input type="password" class="form-control border-dark" name="password2" required>
                            </div>

                            <button type="submit" name="registrasi" class="btn btn-dark">Register!</button>

                            <p class="text-muted"><em>Sudah punya akun?</em> <a href="login.php">Disini</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>