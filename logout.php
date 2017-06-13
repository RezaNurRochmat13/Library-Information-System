<?php
require "DBConnection/db.php";
   session_start();
   
   if(session_destroy()) {
      echo "<script>
    window.alert('Logout anda berhasil. Silahkan login kembali');
    window.location.href='http://localhost/TA/login.php';
    </script>";
   }
?>