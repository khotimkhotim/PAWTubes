<?php
error_reporting(0);
session_start();

if(empty($_SESSION['username'])){
	header("location:../login-user.php");
}
?>
<html>
<head>
<meta name=”viewport” content=”width=device-width; initial-scale=1.0; maximum-scale=1.0;”>
	<title>Pro Intermedia</title>
	<link rel="stylesheet" type="text/css"     href="../css/bootstrap.css">
	<link rel="stylesheet"                     href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css"     href="../css/style2.css">
    <link href="../css/bootstrap-theme.min.css" rel="stylesheet">
       <link href="../css/bootstrap-theme.css" rel="stylesheet">
       <style type="text/css">
       a:link {
	color: #060;
}
       </style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
	 <!-- Fixed navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="col-md-12">
   <a class="navbar-brand" href="#">PROINTERMEDIA</a>     
   
               
  </div>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="dashboard-user.php">Home </a></li>			
             <li>       <a href="logout.php"> Log out </a> <li>
                </div><!--/.nav-collapse -->
      </div>
</nav>
<TR>
<TR>
<div class="container theme-showcase" role="main">
  <!-- Main jumbotron for a primary marketing message or call to action -->
  		<div class="row">
       
      <div class="jumbotron">
      <br>
          <div class="media">
  <div class="media-left media-middle"> 
  </div>
      			<div class="row">
                 <div class="col-md-12">
  <p><a href="#"><img src="Img/1.png" class="gambar"></a></p>
             
               
  </div>
  <br>
           <br>
           <br>
         <br>
        <br>
       <div class="container" align="center">
</div>
        </div>
  </div>                                   
        <br>
        <div class="row">
        <div class="col-md-12">
       <p class="P1"><b>"Pro Intermedia"</b></p><br>
            
            <div class="main"><p><center>Silahkan isi formulir pendaftaran anda disini <a href="daftar_pkl.php" class="fot_c">  Formulir Pendaftaran</a>
</center></p>
</div>
        </div>
<br>
 <br>
 
        </div>
      </div>
      </div>
       </div>
    </div>
  </div>
      </div>
      </div>
       </div>
    
     <!-- / main body -->
   </main>
  </div>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row4">
  <div class="rounded">
    <footer id="footer" class="clear"> 
      <!-- ################################################################################################ -->
      <div class="one_third" align="center">
        <address>
        <br>
          
        <i class="fa fa-envelope-o pright-10"></i>Pro Intermedia Yogyakarta <br>
         <i class="fa fa-envelope-o pright-10"></i> Tempat Prakerin Yogyakarta<br>
          <i class="fa fa-envelope-o pright-10"></i>TERIMA KASIH</address>
    </div>
      
      <!-- ################################################################################################ --> 
    </footer>
  </div>
</div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/jquery.js"></script>
  <script src="../js/bootstrap.js"></script><span class="col-md-6"></span>
		<TR>
		  <script>
			$('.carousel').carousel({
				interval: 5000 //changes the speed
			});
    </script>
</body>
</html>