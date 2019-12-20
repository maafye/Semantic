<html>
<head>
<title>Login</title>
</head>
<body> <title>Survei</title>
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
  

<!--gambar begeser-->
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }
  </style>
  <!--tabelharga-->
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
      <li class="nav-item active">
        <a class="nav-link" href="loginuser.php">Survei<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="channelproduct.php">Channel<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="filmrajar.php">Film<span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>

<div class="login">
	<br><br><br>

	<form method="post" action="aksi_login1.php">
	<input class="masuk" type="text" autocomplete="off"
placeholder="username" name="email" autofocus required><br/>
	<input class="masuk" type="password" autocomplete="off"
placeholder="password" name="password" autofocus required><br/><br>
	<input id="tombol" type="submit" value="login"></form><br>
<a href="tambah.php">Daftar</a> <br><br>
<a href="login.php">Admin</a>
</div>
</body>
</html>