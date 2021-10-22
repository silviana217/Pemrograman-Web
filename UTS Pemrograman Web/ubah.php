<?php
require 'functions.php';
$koneksi = mysqli_connect("localhost", "root", "", "pemweb");

$id = $_GET["id"];
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

if( isset($_POST["submit"]) ) {

    if( ubah($_POST) > 0 ) {
        echo "
            <script>
                alert('Data Diubah');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
        <script>
                alert('Gagal Mengubah');
                document.location.href = 'index.php';
            </script>
            ";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Ubah data mahasiswa</title>
</head>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<body>
<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5">
            <h5 class="card-title text-center mb-5 fw-light fs-5">Ubah Data</h5>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
        <ul>
            <li>
            <div class="form-floating mb-3">
                <label for="nim">NIM : </label>
                <input type="text" name="nim" id="nim" placeholder="nim" class="form-control" 
                required value="<?= $mhs["nim"]; ?>">
            </li>
            <li>
            <div class="form-floating mb-3">
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" placeholder="nama" class="form-control"
                required value="<?= $mhs["nama"]; ?>">
            </li>
            <li>
            <div class="form-floating mb-3">
                <label for="email">Email : </label>
                <input type="text" name="email" id="email" placeholder="email" class="form-control"
                value="<?= $mhs["email"]; ?>">
            </li>
            <li>
            <div class="form-floating mb-3">
                <label for="jurusan">Prodi : </label>
                <input type="text" name="jurusan" id="jurusan" placeholder="jurusan" class="form-control"
                required value="<?= $mhs["jurusan"]; ?>">
            </li>
            <li>
            <div class="form-floating mb-3">
                <label for="gambar">Gambar : </label>
                <input type="text" name="gambar" id="gambar" placeholder="gambar" class="form-control"
                value="<?= $mhs["gambar"]; ?>">
            </li>
            <center>
            <div class="d-grid">
                <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Submit</button>
              </div>
              <hr class="my-4">
            </center>
        </ul>
    </form>
</div>
</div>
</div>
</div>

</body>
</html>