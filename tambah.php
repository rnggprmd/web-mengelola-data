<?php
    require "functions.php";
    if(isset($_POST["submit"])){
        if(tambah($_POST) > 0){
            echo "
                <script>
                    alert('Data Mahasiswa Berhasil Ditambahkan');
                </script>
            ";
        }else {
            echo "
                <script>
                    alert('Data Mahasiswa Gagal Ditambahkan');
                </script>
            ";
        }
    }
?>

<html>
    <link rel="stylesheet" href="css/tambah.css">
    <head>
        <title>TAMBAH DATA MAHASISWA</title>
    </head>
    <body>
        <br><br>

        <form action="" method="post" class="center">
        <div class="card">
  <div class="card-header">
    <div class="text-header">Tambah Data</div>
  </div>
  <div class="card-body">
    <form action="#" method="post">
      <div class="form-group">
      <label for="nim">Nim : </label>
        <input class="form-control" name="nim" id="nim" type="text" required>
      </div>
      <div class="form-group">
      <label for="nama_mhs">Nama : </label>
        <input class="form-control" name="nama_mhs" id="nama_mhs" required type="text">
      </div>
      <div class="form-group">
      <label for="alamat">Alamat : </label>
        <input class="form-control" name="alamat" id="alamat" required  type="text-area">
      </div>
      <div class="form-group">
      <label for="kota">Kota : </label>
      <select name="kota" id="kota">
                        <option value="">Pilih</option>
                        <option value="Tangerang">Tangerang</option>
                        <option value="Jakarta">Jakarta</option>
                        <option value="Bekasi">Bekasi</option>
                        <option value="Depok">Depok</option>
                        <option value="Bogor">Bogor</option>
                        </select>
      </div>
      <div class="form-group">
      <label for="jns_kelamin">Jenis Kelamin : </label>
        <input class="form-control" type="radio" name="jns_kelamin" id="jns_kelamin" value="L">Laki-Laki
        <input class="form-control" type="radio" name="jns_kelamin" id="jns_kelamin" value="P">Perempuan
      </div>
      <div class="form-group">
      <label for="tgl_lahir">Tanggal Lahir : </label>
        <input class="form-control" name="tgl_lahir" id="tgl_lahir" required  type="date">
      </div>
      <a href="index.php" class="btn">Kembali</a>
      <button type="submit" class="btn" name="submit">Tambah</button>
        </form>
    </body>
</html>