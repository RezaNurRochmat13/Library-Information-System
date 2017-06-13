<?php
require "../DBConnection/db.php";
require "../DBConnection/generate.php";

$kode_anggota = "ANGGOTA-".generateRandomString();
$nama_anggota = $_POST['nama_anggota'];
$alamat_anggota = $_POST['alamat_anggota'];
$kelas = $_POST['kelas'];
$jk = $_POST['jk'];
$no_tlp = $_POST['no_tlp'];
$jurusan = $_POST['jurusan'];
$angkatan = $_POST['angkatan'];

//Protect From SQL Injection
$nama_anggota = mysqli_real_escape_string($db,$nama_anggota);
$alamat_anggota = mysqli_real_escape_string($db,$alamat_anggota);
$kelas = mysqli_real_escape_string($db,$kelas);
$no_tlp = mysqli_real_escape_string($db,$no_tlp);
$jurusan = mysqli_real_escape_string($db,$jurusan);
$angkatan = mysqli_real_escape_string($db,$angkatan);
$jk = mysqli_real_escape_string($db,$jk);





$sql = "INSERT INTO anggota (kode_anggota,nama_anggota,jk,alamat_anggota,kelas,no_tlp,jurusan,angkatan) 
VALUES ('$kode_anggota','$nama_anggota','$jk','$alamat_anggota','$kelas','$no_tlp','$jurusan','$angkatan')";

if(mysqli_query($db,$sql)){
  echo "<script>
    window.alert('Pengisian Data Berhasil');
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