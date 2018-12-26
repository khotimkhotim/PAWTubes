<html>
<head>
    <title> Login Siswa</title>
    <link href="Bootstrap/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="Bootstrap/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="Bootstrap/dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="Bootstrap/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" href="style.css">   
</head>
    <body>
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
      <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <img src="images/pklgo1.png" style="float:left;position: relative;">
                <a class="navbar-brand" href="index.php"></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
             <li><a href="home.php">Home </a></li>           
                </div>
</nav>
    <div class="login-box">
    <img src="images/avatar.png" class="avatar">
        <h1>Login</h1>
            <form id="loginF" action="login-proses.php" method="post">
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" name="submit" value="Login">
            <a href="#">Lupa Password?</a> 
            <p><a href="#">Daftar Akun</a>  </p>
              
            </form>
        
        
        </div>
    
    </body>
</html>