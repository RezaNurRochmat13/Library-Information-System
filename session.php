<?php 
  require "DBConnection/db.php";
  session_start();
   
   $user_check = $_SESSION['username'];
   
   $ses_sql = mysqli_query($db,"SELECT * FROM user WHERE username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }
?>