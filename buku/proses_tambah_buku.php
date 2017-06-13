<?php
require "../DBConnection/db.php";
require "../DBConnection/generate.php";

$kode_buku = "BUKU-".generateRandomString();
$judul_buku = $_POST['judul_buku'];
$penulis_buku = $_POST['penulis_buku'];
$penerbit_buku = $_POST['penerbit_buku'];
$katagori_buku = $_POST['katagori_buku'];

//Protect From SQL Injection
$judul_buku = mysqli_real_escape_string($db,$judul_buku);
$penulis_buku = mysqli_real_escape_string($db,$penulis_buku);
$penerbit_buku = mysqli_real_escape_string($db,$penerbit_buku);
$katagori_buku = mysqli_real_escape_string($db,$katagori_buku);





$sqlku ="INSERT INTO buku(kode_buku,judul_buku,penerbit_buku,penulis_buku,katagori_buku) VALUES ('$kode_buku','$judul_buku','$penulis_buku','$penerbit_buku','$katagori_buku')";

if(mysqli_multi_query($db,$sqlku)){
  echo "<script>
    window.alert('Pengisian Data Berhasil');
    window.location.href='http://localhost/TA/buku/daftarbuku.php';
    </script>";
} else {
  /*echo "<script>
    window.alert('Pengisian Data Gagal');
    window.location.href='http://localhost/TA/buku/form_tambah_buku.php';
    </script>";*/
    echo "Err".mysqli_error($db);
}

/*echo $sqlku;*/
?>