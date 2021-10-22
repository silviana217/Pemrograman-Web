<?php
require 'functions.php';

$id = $_GET["id"];

if( hapus($id) > 0 ) {
    echo "
            <script>
                alert('Data Dihapus');
                document.location.href = 'index.php';
            </script>
        ";
}else {
            echo "
            <script>
            alert('Gagal Menghapus data');
            document.location.href = 'index.php';
            </script>
            ";
        }
?>