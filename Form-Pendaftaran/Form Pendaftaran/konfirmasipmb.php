<h2>Pendaftaran Online Mahasiswa Baru 2022</h2>
    <br>
<?php

    $namaDepan = @$_POST["first_name"];
    $namaBelakang = @$_POST["last_name"];
    $jenisKelamin = @$_POST["jenis_kelamin"];
    $jalurSeleksi = @$_POST["jalur_seleksi"];
    $alamat = @$_POST["alamat"];
    $tempattanggalLahir = @$_POST["ttl"];
    $email = @$_POST["email"];
    $noHp = @$_POST["nohandphone"];
    $asalSekolah = @$_POST["asal_sekolah"];
    $tahunLulus = @$_POST["thnlulus"];

    echo "Nama Depan : " .$namaDepan."<br>";
    echo "Nama Belakang : ".$namaBelakang."<br>";
    echo "Jenis Kelamin : ".$jenisKelamin."<br>";
    echo "Alamat : ".$alamat."<br>";
    echo "Tempat Tanggal Lahir : ".$tempattanggalLahir."<br>";
    echo "Email : ".$email."<br>";
    echo "No Handphone : ".$noHp."<br>";
    echo "Asal Sekolah : ".$asalSekolah."<br>";
    echo "Tahun Lulus : ".$tahunLulus."<br>";

?>