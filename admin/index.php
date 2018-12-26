<?php
session_start();
if(!empty($_SESSION['email'])){
	header("location:dashboard-admin.php");
}else{
	
?>



<html>
<head>
    <title> Login Admin</title>
    <link rel="stylesheet" type="text/css" href="style.css">   
</head>
    <body>
    <div class="login-box">
    <img src="foto/avatar.png" class="avatar">
        <h1>Login</h1>
            <form action="proses-login.php" method="POST">
            <p>Email</p>
            <input type="text" name="email" placeholder="email">
            <p>Password</p>
            <input type="password" name="password" placeholder="password">
            <input type="submit" name="submit" value="Login">
            <a href="#">Lupa Password?</a> 
            <p><a href="#">Daftar Akun</a>  </p>
              
            </form>
        
        
        </div>
    
    </body>
</html>
<?php 
}
 ?>
