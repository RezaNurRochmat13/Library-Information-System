<?php 
require "../DBConnection/db.php";
require "../DBConnection/generate.php";

$kode_transaksi = "TRANSAKSI-".generateRandomString();
$kode_anggota = $_POST['kode_anggota'];

$kode_petugas = $_POST['kode_petugas'];
$kode_buku = $_POST['kode_buku'];
$kode_buku2 = $_POST['kode_buku2'];
$tanggal_pinjam = $_POST['tanggal_pinjam'];
$tanggal_pinjam = date("Y-m-d", strtotime($tanggal_pinjam));
$tanggal_kembali = $_POST['tanggal_kembali'];
$tanggal_kembali = date("Y-m-d",strtotime($tanggal_kembali));

if($_POST['kode_buku']){
	$sql = "INSERT IGNORE INTO transaksi (kode_transaksi,kode_anggota,kode_petugas,kode_buku,tgl_pinjam,tgl_kembali) 
VALUES ('$kode_transaksi','$kode_anggota','$kode_petugas','$kode_buku','$tanggal_pinjam','$tanggal_kembali')";

	if(mysqli_query($db,$sql)){
		 echo "<script>
    window.alert('Pengisian Data Berhasil');
    window.location.href='http://localhost/TA/transaksi/transaksi.php';
    </script>";
	} 

} if($_POST['kode_buku2']){
	$sql2 = "INSERT IGNORE INTO transaksi (kode_transaksi,kode_anggota,kode_petugas,kode_buku,tgl_pinjam,tgl_kembali) 
VALUES ('$kode_transaksi','$kode_anggota','$kode_petugas','$kode_buku2','$tanggal_pinjam','$tanggal_kembali')";

if(mysqli_query($db,$sql2)){
		 echo "<script>
    window.alert('Pengisian Data Berhasil');
    window.location.href='http://localhost/TA/transaksi/transaksi.php';
    </script>";
	}  

} else{
	$sql = "INSERT IGNORE INTO transaksi (kode_transaksi,kode_anggota,kode_petugas,kode_buku,tgl_pinjam,tgl_kembali) 
VALUES ('$kode_transaksi','$kode_anggota','$kode_petugas','$kode_buku','$tanggal_pinjam','$tanggal_kembali')";
$sql2 = "INSERT IGNORE INTO transaksi (kode_transaksi,kode_anggota,kode_petugas,kode_buku,tgl_pinjam,tgl_kembali) 
VALUES ('$kode_transaksi','$kode_anggota','$kode_petugas','$kode_buku2','$tanggal_pinjam','$tanggal_kembali')";

if(mysqli_query($db,$sql) && mysqli_query($db,$sql2)){
  echo "<script>
    window.alert('Pengisian Data Berhasil');
    window.location.href='http://localhost/TA/transaksi/transaksi.php';
    </script>";

    echo $sql;
}
    echo "Err".mysqli_error($db);

}




?>