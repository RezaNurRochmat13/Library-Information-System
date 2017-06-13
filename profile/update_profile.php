<?php
include '../DBConnection/db.php';
session_start();
$user_sessi = $_SESSION['username'];

 $kode_petugas = $_GET['kode_petugas']; 

 $kode_petugas = $_POST['kode_petugas'];
 $nama_petugas = $_POST['nama_petugas'];
 $username = $_POST['username'];
 $password = $_POST['password'];
 $passwordHash = sha1($password);

 //Protect From SQL Injection
$nama_petugas = mysqli_real_escape_string($db,$nama_petugas);
$username = mysqli_real_escape_string($db,$username);
$password = mysqli_real_escape_string($db,$password);


$sql = "UPDATE petugas SET nama_petugas='$nama_petugas',username='$username',password='$passwordHash' 
WHERE petugas.kode_petugas='$kode_petugas' AND petugas.username='$user_sessi'";

$result = mysqli_query($db,$sql);

if(mysqli_query($db,$sql)){
  echo "<script>
    window.alert('Pengubahan Data Berhasil');
    window.location.href='../dashboard.php';
    </script>";
} else {
/*  echo "<script>
    window.alert('Pengisian Data Gagal');
    window.location.href='http://localhost/TA/buku/form_tambah_buku.php';
    </script>";*/
    echo "Err".mysqli_error($db);
}




?>