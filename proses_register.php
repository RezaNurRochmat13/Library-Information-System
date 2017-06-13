<?php
require "DBConnection/db.php";
require "DBConnection/generate.php";

//Variabel input tabel petugas
$kode_petugas = "PTGS-".generateRandomString();
$nama_petugas = $_POST['nama_petugas'];
//Variabel input tabel user
$username = $_POST['username'];
$password = $_POST['password'];
$passwordHash = sha1($password);

//Protect From SQL Injection
$username = mysqli_real_escape_string($db,$username);
$password = mysqli_real_escape_string($db,$password);


$sqlku ="INSERT INTO petugas (kode_petugas,nama_petugas,username,password) VALUES('$kode_petugas','$nama_petugas','$username','$passwordHash')";

if(mysqli_multi_query($db,$sqlku)){
  echo "<script>
    window.alert('Pengisian Data Berhasil. Silahkan login akun anda.');
    window.location.href='http://localhost/TA/login.php';
    </script>";
} else {
/*  echo "<script>
    window.alert('Pengisian Data Gagal');
    window.location.href='http://localhost/TA/buku/form_tambah_buku.php';
    </script>";*/
    echo "Err".mysqli_error($db);
}

?>