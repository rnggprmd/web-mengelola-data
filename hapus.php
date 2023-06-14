<?php
//menghubungkan koneksi
require 'functions.php';

$n = $_GET['nim'];

$query = "DELETE FROM mahasiswa where nim='$n'";

$result = mysqli_query($conn, $query);

if ($result) {
    // echo "Data Sukses Terhapus, Lihat Tampilan <a href='tampil.php'>View</a>";
    header('location:index.php');
} else {
    echo "Data Gagal Dihapus";
}