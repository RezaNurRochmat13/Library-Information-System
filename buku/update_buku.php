<?php

include '../DBConnection/db.php';

 $kode_buku = $_GET['kode_buku'];
 
 $judul_buku = $_POST['judul_buku'];
 $penulis_buku = $_POST['penulis_buku'];
 $penerbit_buku = $_POST['penerbit_buku'];
 $katagori_buku = $_POST['katagori_buku'];

//Protect From SQL Injection
$judul_buku = mysqli_real_escape_string($db,$judul_buku);
$penulis_buku = mysqli_real_escape_string($db,$penulis_buku);
$penerbit_buku = mysqli_real_escape_string($db,$penerbit_buku);
$katagori_buku = mysqli_real_escape_string($db,$katagori_buku);

 $sql = "UPDATE buku SET judul_buku='$judul_buku',penulis_buku='$penulis_buku',
 penerbit_buku='$penerbit_buku',katagori_buku='$katagori_buku'
 WHERE kode_buku='$kode_buku'";

 $result = mysqli_query($db,$sql);

if(mysqli_query($db,$sql)){
  echo "<script>
    window.alert('Pengubahan Data Berhasil');
    window.location.href='http://localhost/TA/buku/daftarbuku.php';
    </script>";
} else {
/*  echo "<script>
    window.alert('Pengisian Data Gagal');
    window.location.href='http://localhost/TA/buku/form_tambah_buku.php';
    </script>";*/
    echo "Err".mysqli_error($db);
}



?>