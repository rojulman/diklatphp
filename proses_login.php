<?php
  session_start();
  $_username = $_POST['email'];
  $_password = $_POST['password'];
  
  if($_username=='admin@gmail.com' && $_password=='123456')
  {
	  $_SESSION['USERNAME']=$_username;
	  $_SESSION['ROLE']='admin';
	  header('Location:index.php');
	  //echo 'Selamat Datang !!';
  }else{
	  header('Location:login.php?status=f');
	  //echo 'Username atau password salah !';
  }

?>