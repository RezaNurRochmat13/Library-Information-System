<?php
include '../DBConnection/db.php';

$kode_anggota = $_GET['kode_anggota'];

$nama_anggota = $_POST['nama_anggota'];
$alamat_anggota = $_POST['alamat_anggota'];
$kelas = $_POST['kelas'];
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

$sql = "UPDATE anggota SET nama_anggota='$nama_anggota',
alamat_anggota='$alamat_anggota',kelas='$kelas',jurusan='$jurusan',
no_tlp='$no_tlp',angkatan='$angkatan' WHERE kode_anggota='$kode_anggota'";

$result = mysqli_query($db,$sql);

if(mysqli_query($db,$sql)){
  echo "<script>
    window.alert('Pengubahan Data Berhasil');
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