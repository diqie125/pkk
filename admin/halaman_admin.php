<?php 
session_start();
if(!isset($_SESSION)){
    header('location:login.php');
}
if($_SESSION['role'] !="admin" ){
    echo "Anda ga ada akses";
die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <from>
          
        <div class="div1">   
    <h2>Nama<input type="text" name="username"/></h2>
</div>
        <div class="div1">   
    <h2>Deskripsi<input type="text" name="deskripsi"/></h2>
</div>
        <div class="div1">   
    <h2>Harga<input type="number" name="harga"/></h2>
</div>
        <div class="div1">   
    <h2>Foto<input type="file" name="file"/></h2>
</div>
        <div class="div1">   
    <input type="submit" name="submit"/>
</div>
      
</div>
</from>
</body>
</html>