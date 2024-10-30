<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
            body {
                background-image: url('Bg2.gif');
                  background-repeat: repeat;
	      background-size: cover;
          height:auto;
            }
        
        </style>
<body>
    <style>
        form{
text-align: center;
background-color:  rgba(0, 0, 0, 0.5);
margin-right: 50px;
margin-left: 50px;
margin-top: 50px;
border-radius: 50px;
height: 400px;
padding-top: 30px;

}
.div1{
    
/* background-color: aqua; */
margin-top: 30px;
margin-bottom: 20px;
}
.div1 input {
    height: 20px;
    width: 250px;
    border-radius:10px;
}
input{
    margin-bottom:15px ;
}
h2{
    font-size: xx-large;
    color:#FCFAEE;
}
.div2{
    margin-top: 20px;
    padding-top: -15px;
    /* background-color: blueviolet; */
}
.div2 input{
    height: 20px;
        width: 250px;
        border-radius:10px;
}
.div3 input {
    margin-top: 15px;
    height: 40px;
    width: 75px;
    border-radius:10px;
    cursor: pointer;
    outline: none;
  color: #fff;
  background-color:#024CAA;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}
.div3 input:hover {background-color: #0D92F4}

.div3 input:active {
  background-color: #0D92F4;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
a{
    font-size:large;
    margin-left:650px;
     text-decoration:none;
     color:#E9EED9;
}
a:hover{
color:#0D92F4;
}
.div0{
    margin-top:-20px;
    font-size:60px;
    height:40px;
    color:#A2D2DF;
}

 </style>
   <title>Register</title>
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
<a href="login.php">
    Login
</a>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html> -->


<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
</head>
<body>
    <h2>Register</h2>
    <form action="proses_register.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        
        <input type="submit" value="Register">
    </form>
</body>
</html>