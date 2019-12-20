<html>
<head>
<title>Daftar User</title>
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
      .daftar{text-align: center;
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
<div class="daftar">
	<br><br><br><br>
Daftar
<form method="POST" action="tambah_proses.php">
<input type="text" placeholder="username" name="email"><br/>
<input type="password" placeholder="your password" name="password"><br><br>
<input type="submit"value="daftar"></form>
<br>
<a href="loginuser.php">Login</a>
</div>
</body>
</html>