<?php
require "../DBConnection/db.php";

$kode_buku = $_GET['kode_buku'];

$sql = "DELETE FROM buku WHERE kode_buku='$kode_buku'";
$result = mysqli_query($db,$sql);

if(mysqli_query($db,$sql)){
  echo "<script>
    window.alert('Hapus Data Berhasil');
    window.location.href='http://localhost/TA/buku/daftarbuku.php';
    </script>";
} else {
/*  echo "<script>
    window.alert('Pengisian Data Gagal');
    window.location.href='http://localhost/TA/buku/form_tambah_buku.php';
    </script>";*/
    echo "Error".mysqli_error($db);
}

?>