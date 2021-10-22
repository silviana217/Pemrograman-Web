<?php
require 'functions.php';
$koneksi = mysqli_connect("localhost", "root", "", "pemweb");

if( isset($_POST["submit"]) ) {

    if( tambah($_POST) > 0 ) {
        echo "
            <script>
                alert('Data Ditambahkan');
                document.location.href = 'krusial.php';
            </script>
        ";
    } else {
        echo "Gagal Menambahkan data";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin Login</title>

  </head>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<div class="container">

<form class="well form-horizontal" action=" " method="post"  id="contact_form">
<fieldset>

<!-- Form Name -->
<legend><center><h2><b>Form Registrasi</b></h2></center></legend><br>

<!-- Text input-->
<center>
<div class="form-group">
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<label class="col-md-4 control-label">NIM:</label> <input  name="nim" placeholder="NIM" class="form-control"  type="text">
</center>
</div>
</div>
</div>

<!-- Text input-->
<center>
<div class="form-group">
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<label class="col-md-4 control-label" >Nama: </label> <input name="nama" placeholder="Nama" class="form-control"  type="text">
</center>
</div>
</div>
</div>

<!-- Text input-->
<center>
<div class="form-group">
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<label class="col-md-4 control-label" >Email</label> <input name="email" placeholder="Email" class="form-control"  type="text">
</center>
</div>
</div>
</div>

<!-- Text input-->
<center>
<div class="form-group">
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<label class="col-md-4 control-label" >Jurusan</label> <input name="jurusan" placeholder="Jurusan" class="form-control"  type="text">
</center>
</div>
</div>
</div>

<!-- Text input-->
<center>
<div class="form-group">

<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<label class="col-md-4 control-label" >Gambar</label> <input name="gambar" placeholder="Gambar" class="form-control"  type="text">
</center>
</div>
</div>
</div>

<!-- Text input-->
<center>
<div class="form-group">
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<label class="col-md-4 control-label" >Tentang</label> <input name="tentang" placeholder="Tentang" class="form-control"  type="text">
</center>
</div>
</div>
</div>

<!-- Button -->
<div class="form-group">
<label class="col-md-4 control-label"></label>
<center>
<button type="submit" name="submit">Tambah Data</button>
</center>
</div>
 <center>
<h4 class="title"><a href="krusial.php">Pergi ke Halaman Admin</a></h4>
</center>
</fieldset>
</form>
</div>
</div><!-- /.container -->