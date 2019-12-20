<?php
include 'koneksi3.php';
$tambah=isset($_POST['Daftar'])?$_POST['Daftar']:'';
$email=$_POST['email'];
$password=$_POST['password'];
$input=mysqli_query($koneksi3,"INSERT INTO email (email,password) VALUES ('$email','$password')") or die (mysqli_error($koneksi3));
if($input==1){
	echo'<h3>Akun berhasil di daftar!';
	echo'<a href="loginuser.php">Silahkan Mengisi Survei</a>';
}
else{
	echo '<script>window.history.back()</script>';
}
?>