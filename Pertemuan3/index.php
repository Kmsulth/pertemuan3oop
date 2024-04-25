
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<h1>Data Mahasiswa</h1>
<a href="input.php" class="btn btn-primary">Tambah Data</a>
<table class ="table table-bordered table-hover">
    <thead>
        <tr>
            <td width="5%" >No</td>
            <td>NIM</td>
            <td>Nama</td>
            <td>Program</td>
            <td width="15%">Aksi</td>
        </tr>
    </thead>
    <tbody>
    <?php
    include 'aksi.php';
    $db = new aksi();
    $no=1;
    foreach($db->tampilan() as $row) {
        echo "
        <tr>
            <td>$no</td>
            <td>$row[nim]</td>
            <td>$row[nama]</td>
            <td>$row[prodi]</td>
            <td>
                <a href='hapus.php?nim=$row[nim]' class='btn btn-danger btn-sm'>Hapus</a>
                <a href='form_ubah.php?nim=$row[nim]' class='btn btn-danger btn-sm'>ubah</a>
            </td>
        </tr>
        ";
        $no++;
    }
    ?>
    </tbody>
</table>