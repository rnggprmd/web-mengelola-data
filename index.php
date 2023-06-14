<?php
    require 'functions.php';
    $mahasiswa = query("SELECT * FROM mahasiswa");
?>

<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">

    <head>
        <title> DATA KUCING UNIVERSITY</title>
    </head>
    <body>
    <nav class="navbar bg-dark border-bottom border-bottom-dark" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="gambar/logo.png" alt="Logo" width="100px" height="100px" class="nav-logo">
                <span class="navbar-text fs-1" style="color: white; font-weight: bold;">DATA KUCING UNIVERSITY</span>
            </a>
        </div>
    </nav>
        
        <br>
        <table class="table table-dark table-hover">
            <tr>
                <th>NIM</th>
                <th>NAMA MAHASISWA</th>
                <th>ALAMAT</th>
                <th>KOTA</th>
                <th>JENIS KELAMIN</th>
                <th>TANGGAL LAHIR</th>
                <th>Keterangan</th>
            </tr>
            
            <?php foreach($mahasiswa as $mhs) : ?>
            <tr>
                <td><?= $mhs["nim"]?></td>
                <td><?= $mhs["nama_mhs"]?></td>
                <td><?= $mhs["alamat"]?></td>
                <td><?= $mhs["kota"]?></td>
                <td><?= $mhs["jns_kelamin"]?></td>
                <td><?= $mhs["tgl_lahir"]?></td>
                <td>
                    <a class="btn btn-outline-danger" href="hapus.php?nim=<?=$mhs['nim']?>" onclick="return confirm('yakin?');" role="button"><i class="bi bi-person-fill-dash"></i> Hapus</a> |
                    <a class="btn btn-outline-primary" href="update.php?nim=<?=$mhs['nim']?>" role="button"><i class="bi bi-person-fill-gear"></i> Update</a>
                </td>
            </tr>        
            <?php endforeach;?>
        </table>
        <a href="tambah.php" class="btn btn-success">Tambah Data</a>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</hmtl>
    
