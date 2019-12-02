<?php
   include('connect.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($savienojums,"select username from users where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];


   if(!isset($_SESSION['login_user'])){
      header("Refresh:0; url=rust.php");
      die();
   }

?>