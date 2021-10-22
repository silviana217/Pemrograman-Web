
<?php 

	require "functions.php";
    $koneksi = mysqli_connect("sql208.epizy.com", "epiz_30134163", "xLn4FYMWLcIB2", "epiz_30134163_pemweb");

	session_start();

	//untuk mengambil data dari form
	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = "SELECT * FROM ketua WHERE username = '".$username."' and password = '".$password."'";
	$data = mysqli_query($koneksi, $query);
	$cek = mysqli_num_rows($data);

    echo $query;
	if($cek > 0) {
		$baris = mysqli_fetch_array($data);
		$_SESSION['id'] = $baris['id'];
		$_SESSION['username'] = $baris['username'];
		$_SESSION['password'] = $baris['password'];

		header("Location:tambah.php");
	} else {
		header("Location:index.php");
	}