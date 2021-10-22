<?php

$koneksi = mysqli_connect("localhost", "epiz_30134163", "xLn4FYMWLcIB2", "epiz_30134163_pemweb");

function query($query) {
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}


function tambah($data){

    global $koneksi;

    $nim = htmlspecialchars($data["nim"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);
    $tentang = htmlspecialchars($data["tentang"]);

    $query = "INSERT INTO mahasiswa
    VALUES
    ('', '$nim', '$nama', '$email', '$jurusan', '$gambar', '$tentang')
    ";
mysqli_query($koneksi, $query);

return mysqli_affected_rows($koneksi);
}


function hapus($id) {
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($koneksi);
}


function ubah($data){

    global $koneksi;

    $id = $data["id"];
    $nim = htmlspecialchars($data["nim"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);
    $tentang = htmlspecialchars($data["tentang"]);

    $query = "UPDATE mahasiswa SET
                nim = '$nim',
                nama = '$nama',
                email = '$email',
                jurusan = '$jurusan',
                gambar = '$gambar',
                tentang = '$tentang'

                WHERE id = $id
                ";
            mysqli_query($koneksi, $query);

            return mysqli_affected_rows($koneksi);
}
?>