<?php
error_reporting(0);
session_start();

if(empty($_SESSION['email'])){
	header("location:index.php");
}
?>
<html>
<head>
<meta name=”viewport” content=”width=device-width; initial-scale=1.0; maximum-scale=1.0;”>
	<title>Pro Intermedia</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet"                 href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style2.css">
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
   <a class="navbar-brand" href="index1.php">PROINTERMEDIA</a>     
   
               
  </div>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
         <li class="active"><a href="dashboard-user.php">Home </a></li>
			<li>
					<a href="daftar_pkl.php">| Daftar Pkl |</a>
					 </li>
			<li> <a href="galery.php">| Galery |</a> </li>
             <li>       <a href="logout.php">| Log out |</a> <li>
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
  <p><a href="index.php"><img src="Img/1.png" class="gambar"></a></p>
             
               
  </div>
  <br>
           <br>
           <br>
         <br>
        <br>
       <div class="container" align="center">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="Img/satu.png" alt="Tech Tech Computer" width="800" >
      </div>

      <div class="item">
        <img src="Img/dua.png" alt="Chania" width="800" >
      </div>
    
      <div class="item">
        <img src="Img/tiga.png" width="800">
      </div>
       <div class="item">
        <img src="Img/empat.png" width="800">
      </div>

    
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
        </div>
  </div>
        </br>
          
          
        
        
        <br>
        <div class="row">
        <div class="col-md-12">
       <p class="P1"><b>GALERY PKL PRO INTERMEDIA YOGYAKARTA</b></p>
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