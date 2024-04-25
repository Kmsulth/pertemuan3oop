<?php
include 'aksi.php';
$db = new aksi();

$nim = $_POST['nim'];
$result = $db->hapus($nim);
    echo "
    <script>
        alert('Data Berhasil Dihapus');
        window.location.href='index.php';
        </script>
    ";
?>