<?php
use LDAP\Result;
    $conn = mysqli_connect("localhost", "root", "", "kampus");
    function query($query) {
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while($row =mysqli_fetch_assoc($result)){
            $rows [] = $row;
        }
        return $rows;
    }

    function tambah($data){
        global $conn;
        $nim = htmlspecialchars($data["nim"]);
        $nama_mahasiswa = htmlspecialchars($data["nama_mhs"]);
        $alamat = htmlspecialchars($data["alamat"]);
        $kota = htmlspecialchars($data["kota"]);
        $jns_kelamin = htmlspecialchars($data["jns_kelamin"]);
        $tgl_lahir = htmlspecialchars($data["tgl_lahir"]);

        $query = "INSERT INTO mahasiswa VALUES ('$nim','$nama_mahasiswa','$alamat','$kota','$jns_kelamin','$tgl_lahir')";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }
?>