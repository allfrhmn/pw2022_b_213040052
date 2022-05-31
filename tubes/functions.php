<?php

function koneksi()
{
    $conn = mysqli_connect('localhost', 'root', '', 'tubes_213040052') or die('Koneksi Gagal!!');

    return $conn;
}

function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));


    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function upload()
{
    $namaFile = $_FILES["gambar"]["name"];
    $tipeFile = $_FILES["gambar"]["type"];
    $ukuranFile = $_FILES["gambar"]["size"];
    $error = $_FILES["gambar"]["error"];
    $tmpFile = $_FILES["gambar"]["tmp_name"];

    // ketika tidak ada gambar yang dipilih
    if ($error == 4) {
        echo "<script>
                alert('pilih gambar terlebih dahulu');
            </script>";
    }

    // cek ekstensi file
    $daftarGambar = ['jpg', 'jpeg', 'png'];
    $ekstensiFile = explode('.', $namaFile);
    $ekstensiFile = strtolower(end($ekstensiFile));

    if (!in_array($ekstensiFile, $daftarGambar)) {
        echo "<script>
                alert('yang anda pilih bukan gambar!');
            </script>";
        return false;
    }

    // cek type file
    if ($tipeFile != 'image/jpeg' && $tipeFile = 'image/png') {
        echo "<script>
                alert('yang anda pilih bukan gambar');
            </script>";
        return false;
    }

    // cek ukuran file
    // maksimal 5Mb == 5000000
    if ($ukuranFile > 5000000) {
        echo "<script>
                alert('ukurannya gambar terlalu besar!');
            </script>";
        return false;
    }

    // lolos pengecekan
    // siap upload file
    // generate nama file baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiFile;
    move_uploaded_file($tmpFile, 'img/' . $namaFileBaru);

    return $namaFileBaru;
}

function tambah($data)
{
    $conn = koneksi();

    $nama = htmlspecialchars($data["nama"]);
    $jenis = htmlspecialchars($data["jenis"]);
    $stok = htmlspecialchars($data["stok"]);
    $harga = htmlspecialchars($data["harga"]);
    $gambar = htmlspecialchars($data["gambar"]);

    // upload gambar
    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    $query = "INSERT INTO produk VALUES (NULL, '$nama', '$jenis', '$stok', '$harga', '$gambar')";

    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM produk WHERE id = $id") or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    $conn = koneksi();

    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $jenis = htmlspecialchars($data["jenis"]);
    $stok = htmlspecialchars($data["stok"]);
    $harga = htmlspecialchars($data["harga"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);

    // cek apakah user pilih gambar baru atau tidak
    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }

    $query = "UPDATE produk SET 
                nama = '$nama',
                jenis = '$jenis',
                stok = '$stok',
                harga = '$harga',
                gambar = '$gambar'
            WHERE id = $id
            ";

    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

// function login($data)
// {
//     $conn = koneksi();

//     $username = htmlspecialchars($data["username"]);
//     $password1 = htmlspecialchars($data["password1"]);

//     // cek dulu username
//     if ($user = query("SELECT * FROM user WHERE username = '$username'")) {
//         // cek password
//         if (password_verify($password1, $user["password1"])) {
//             // set session
//             $_SESSION["login"] = true;

//             header("Location: admin.php");
//             exit;
//         }
//         return [
//             'error' => true,
//             'pesan' => 'username atau passwordnya salah!'
//         ];
//     }
// }

function registrasi($data)
{
    $conn = koneksi();

    $username = htmlspecialchars(strtolower($data["username"]));
    $password1 = mysqli_real_escape_string($conn, $data["password1"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    // jika username atau passwordnya kosong
    if (empty($username) || empty($password1) || empty($password2)) {
        echo "<script> 
                alert('username atau passwordnya salah!');
                document.location.href = 'registrasi.php';
            </script>";
        return false;
    }

    // jika konfirmasi passwordnya tidak sesuai
    if ($password1 !== $password2) {
        echo "<script> 
                alert('passwordnya tidak sesuai!');
                document.location.href = 'registrasi.php';
            </script>";
        return false;
    }

    // jika passwordnya < 4
    if (strlen($password1) < 4) {
        echo "<script> 
                alert('passwordnya terlalu pendek!');
                document.location.href = 'registrasi.php';
            </script>";
        return false;
    }

    // jika username & passwordnya sudah selesai
    // enkripsi password
    $passwordBaru = password_hash($password1, PASSWORD_DEFAULT);
    // insert ke tabel user
    $query = "INSERT INTO user
                VALUES
            (NULL, '$username', '$passwordBaru')
            ";
    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}
