<!DOCTYPE html>
<html>
<head>
  <title>Survei</title>
  <link rel="stylesheet" type="text/css" href="project.css">
<style>
header{
    color:white;
    font-size:60px;
    text-align:center;
    }

</style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!-- email -->

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  

</head>
<body>
   <style type="text/css"> 
      body{background-image: url(img/beauty.jpg);
      }
      .login{text-align: center;
          }
  </style>

<nav class="navbar navbar-expand-lg navbar-light bg-info">
<img src="img/dc1.png" width="45px" height="50px">
  <a class="navbar-brand" href="project.php" ><b> Daily Care</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav ml-auto" >
      <li class="nav-item active">
        <a class="nav-link" href="beauty.html">Home <span class="sr-only">(current)</span></a>
      </li> 
      
       <li class="nav-item active">
        <a class="nav-link" href="landingpage.html">Beauty<span class="sr-only">(current)</span></a>
      </li>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="News.html">News<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="Review.html">Review<span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>






<?php
session_start();
include "koneksi3.php";
if(!isset($_SESSION['email'])){
  header("location:loginuser.php");
  exit();
}

if(isset($_SESSION['email'])){
  $email=$_SESSION['email'];
}
?>

 
<br><br>
<br>
<h3 align="center"> Form Survei Merk Favorit</h3>
<br>
<table border="0" align="center" cellpadding="15%">
<tr>
<form action ="tambah_proses1.php" method = "post">
<table cellpadding = "3" cellspacing = "0" align="center">
<tr>
<td>E-mail</td>
<td>:</td>

<td><input type = "text" name = "kom" size = "30" required></td>

<tr>
<td>Nama Lengkap</td>
<td>:</td>
<td><input type = "text" name = "nama" size = "30" required></td>
</tr>
<tr>
<td>Nomor Telepon</td>
<td>:</td>
<td><input type = "text" name = "nim" required></td>
</tr>
</tr>

<tr>
<td>Merk</td>
<td>:</td>
<td>
<select name = "jurusan" required>
<option value = "">Pilih Merk Skincare Favorit Anda</option>
<option value = "Wardah">Wardah</option>
<option value = "Emina">Emina</option>
<option value = "Laneige">Laneige</option>
<option value = "SK-II">SK-II</option>
<option value = "Neogen Dermalogy">Neogen Dermalogy</option>
<option value = "Herborist">Herborist</option>
<option value = "Innisfree">Innisfree</option>
<option value = "Ponds">Ponds</option>
<option value = "Lainnya">Lainnya</option>
</select>
</td>
</tr>

<tr>
<td></td>
<td></td>
<td><input type = "submit" name = "tambah" value = "Kirim"></td>
</tr>
</table>
</form>

</table>
<br><br>
</body>
</html>
