<?php
require "../DBConnection/db.php";

$kode_anggota = $_GET['kode_anggota'];

$sql = "DELETE FROM transaksi WHERE kode_anggota='$kode_anggota'";
$sql = "DELETE FROM transaksi WHERE kode_anggota='$kode_anggota'";

if(mysqli_multi_query($db,$sql)){
  echo "<script>
    window.alert('Hapus Data Berhasil');
    window.location.href='http://localhost/TA/transaksi/transaksi.php';
    </script>";
} else {
/*  echo "<script>
    window.alert('Pengisian Data Gagal');
    window.location.href='http://localhost/TA/buku/form_tambah_buku.php';
    </script>";*/
    echo "Err".mysqli_error($db);
}

?>