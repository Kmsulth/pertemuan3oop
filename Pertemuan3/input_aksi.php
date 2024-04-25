<?php
include 'aksi.php';
$db = new aksi();

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$prodi = $_POST['prodi'];
$result = $db->simpan($nim,$nama,$prodi);
if($result==1){
    echo "
    <script>
        alert('Data BErhasil disimpan');
        window.location.href='input.php';
        </script>
    ";
}else{
    echo "<script>
    alert('Gagal Simpan');
    history.go(-1);
    </script>";
}
?>