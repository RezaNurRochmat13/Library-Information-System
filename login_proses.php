<?php
session_start();

require "DBConnection/db.php";

$username = $_POST['username'];
$password = sha1($_POST['password']);

//Protect From SQL Injection
$username = mysqli_real_escape_string($db,$username);
$password = mysqli_real_escape_string($db,$password);

 
$query ="SELECT * FROM petugas WHERE username='$username' AND password='$password'";
$result = mysqli_query($db,$query);
$row=mysqli_fetch_array($result, MYSQLI_ASSOC);

$cek = mysqli_num_rows($result);
if($cek > 0){

	$_SESSION['username'] = $username;
	echo "<script>
    window.alert('Login anda berhasil');
    window.location.href='http://localhost/TA/dashboard.php';
    </script>";
}else{
	echo "<script>
    window.alert('Login anda gagal. Cek username dan password anda');
    window.location.href='http://localhost/TA/login.php';
    </script>";
}

?>