<?php
include 'connect.php';
$tambah=isset($_POST['Daftar'])?$_POST['Daftar']:'';
$nim=$_POST['nim'];
$nama=$_POST['nama'];
$kom=$_POST['kom'];
$jurusan=$_POST['jurusan'];
$input=mysqli_query($connect,"INSERT INTO mahasiswa (nim,nama,kom,jurusan) VALUES ('$nim','$nama','$kom','$jurusan')") or die (mysqli_error($connect));
if($input==1){
	echo'Terimakasih telah mengisi survei :) ';
	echo'<a href="beauty.html">Kembali</a>';
}
else{
	echo '<script>Gagal</script>';
}
?>