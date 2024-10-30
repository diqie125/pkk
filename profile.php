<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     <link rel="stylesheet" href="profile.css">
     <style>
      img{
       width: 207px;
       height: 200px;
       margin-left:42%;
       margin-top:4px;
       border-radius:50%;
      }
      h1{
         text-align: center;
         margin-top:30px
      }
      h2{
         text-align: center;
         margin-top:20px
      }
    
      </style>
  </head>
  <body>
    
<nav class="navbar" style="background-color: #674188;">
  <div class="container-fluid">
    <a class="navbar-brand text-light" href="#">PROFILE</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page"  href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light"  href="#">Keranjang</a>
        </li>
         <li class="nav-item">
         <a class="btn btn-primary" style="--bs-link-hover-color-rgb: 25, 135, 84;" href="logout.php" role="button">Logout</a>
        </li>
        </li>
      </ul>
    </div>
  </div>
</nav>
<img src="bg2.gif">
<h1 style="color:white;"><?php  
session_start(); echo $_SESSION ["username"]; 
?></h1>
<h2 style="color:white;"><?php  
echo $_SESSION ["role"] ;
?></h2>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>