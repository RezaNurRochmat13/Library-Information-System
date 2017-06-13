<?php
require "../DBConnection/db.php";

$kode_anggota = $_GET['kode_anggota'];

$sql = "DELETE FROM anggota WHERE kode_anggota='$kode_anggota'";
$result = mysqli_query($db,$sql);

if(mysqli_query($db,$sql)){
  echo "<script>
    window.alert('Hapus Data Berhasil');
    window.location.href='http://localhost/TA/anggota/daftaranggota.php';
    </script>";
} else {
/*  echo "<script>
    window.alert('Pengisian Data Gagal');
    window.location.href='http://localhost/TA/buku/form_tambah_buku.php';
    </script>";*/
    echo "Err".mysqli_error($db);
}

?>