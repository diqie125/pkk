<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/css.css">
   <style>
            body {
                background-image: url('Bg2.gif');
                  background-repeat: repeat;
	      background-size: cover;
          height:auto;
            }
        
        </style>
<body>
 <title>Login</title>
</head>

    <form action="proses_login.php" method="post">
      
            <h1 class="div0">LOGIN</h1>
        
        <div class="div1">
            <h2>Username</h2>
        <input type="text" name="username"/>
</div>
      <div class="div2">
         <h2>Password</h2>
          <input type="password" name="password"/>
</div>
<div class="div3">
        <input type="submit" name="login"/>
</div>
<a href="register.php">
    Register
</a>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>
</html>