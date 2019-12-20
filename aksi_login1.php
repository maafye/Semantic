<?php
	session_start();
	require_once 'koneksi3.php';
	$email=$_POST['email'];
	$password=$_POST['password'];
	$query=mysqli_query($koneksi3,"SELECT * FROM email where email='$email'and password='$password'");

$xxx=mysqli_num_rows($query);

if($xxx==TRUE) {
	$_SESSION['email']=$email;
	echo"<script> alert('login sukses'); 
	location='beli.php'; </script>";

}
else{
	echo"<script> alert ('Login gagal'); location='loginuser.php'; </script>";
}




?>