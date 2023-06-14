<?php
require 'functions.php';

$n = $_GET['nim'];

$query = "SELECT * FROM mahasiswa where nim='$n'";

$result = mysqli_query($conn, $query);

while ($data = mysqli_fetch_array($result)) {
    $nim = $data['nim'];
    $nm = $data['nama_mhs'];
    $alt = $data['alamat'];
    $kt = $data['kota'];
    $jk = $data['jns_kelamin'];
    $tgl = $data['tgl_lahir'];
}

?>
<link rel="stylesheet" href="css/update.css">
<form method="post" action="">
<div class="card">
  <div class="card-header">
    <div class="text-header">Update Data</div>
  </div>
  <div class="card-body">
    <form action="#" method="post">
      <div class="form-group">
      <label for="nim">Nim : </label>
        <input class="form-control" value="<?php echo $nim ?>" readonly name="nim" id="nim" type="text" required>
      </div>
      <div class="form-group">
      <label for="nama_mhs">Nama : </label>
        <input class="form-control" value="<?php echo $nm ?>" name="nama_mhs" id="nama_mhs" required type="text">
      </div>
      <div class="form-group">
      <label for="alamat">Alamat : </label>
        <input class="form-control" value="<?php echo $alt ?>" name="alamat" id="alamat" required  type="text-area">
      </div>
      <div class="form-group">
      <label for="kota">Kota : </label>
      <select name="kota" id="kota" value="<?php echo $kt ?>">
                        <option selected ><?= $kt ?></option>
                        <option value="Tangerang">Tangerang</option>
                        <option value="Jakarta">Jakarta</option>
                        <option value="Bekasi">Bekasi</option>
                        <option value="Depok">Depok</option>
                        <option value="Bogor">Bogor</option>
                        </select>
      </div>
      <div class="form-group">
      <label for="jns_kelamin">Jenis Kelamin : </label>
        <input class="form-control" type="radio" name="jns_kelamin" id="jns_kelamin" <?php echo $jk == 'L' ? "checked" : ""; ?> value="L">Laki-Laki
        <input class="form-control" type="radio" name="jns_kelamin" id="jns_kelamin" <?php echo $jk == 'P' ? "checked" : ""; ?> value="P">Perempuan
      </div>
      <div class="form-group">
      <label for="tgl_lahir">Tanggal Lahir : </label>
        <input class="form-control" name="tgl_lahir" value="<?php echo $tgl ?>" id="tgl_lahir" required  type="date">
      </div>
      <a href="index.php" class="btn">Kembali</a>
      <button type="submit" class="btn" name="update">EDIT</button>
</form>

<?php

if (isset($_POST['update'])) {
    $nim = $_POST['nim'];
    $nm = $_POST['nama_mhs'];
    $alt = $_POST['alamat'];
    $kt = $_POST['kota'];
    $jk = $_POST['jns_kelamin'];
    $tgl = $_POST['tgl_lahir'];

    $q = "UPDATE mahasiswa SET nama_mhs='$nm', alamat='$alt', kota='$kt', jns_kelamin='$jk', tgl_lahir='$tgl' WHERE nim='$nim'";

    $perintah = mysqli_query($conn, $q);

    if ($perintah) {
        header("location:index.php");
    } else {
        echo "Gagal Diupdate";
    }
}

?>