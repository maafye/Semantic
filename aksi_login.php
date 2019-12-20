<?php
	session_start();
	require_once 'koneksi2.php';
	$username=$_POST['username'];
	$password=$_POST['password'];
	$query=mysqli_query($db,"SELECT * FROM data where username='$username'and password='$password'");

$xxx=mysqli_num_rows($query);

if($xxx==TRUE) {
	$_SESSION['username']=$username;
	echo"<script> alert('login sukses'); 
	location='crud/index.php'; </script>";

}
else  if($xxx==FALSE) {
	echo"<script> alert ('Login gagal'); location='login.php'; </script>";
}



?>