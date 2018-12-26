<?php
error_reporting(0);
session_start();

if(empty($_SESSION['email'])){
	header("location:index.php");
}
?>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin Pro Intermedia</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span>ADMIN</span>PROINTERMEDIA</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="proses-logout.php"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> admin Logout </a>
						
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		
		<ul class="nav">
			<li class="active"><a href="indexadmin.php"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Data PKL</a></li>
			<li class="active"><a href="galery.php"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Galeri</a></li>
			<li class="active"><a href="konten.php"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Konten</a></li>
			
			</ul>

	</div><!--/.sidebar-->
		
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
        <div class="col=md-12">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Konten</li>
			</ol>
		</div><!--/.row-->
		</div>
		<br>
		<div class="row">
		 <div class="col-sm-12">          
		<?php
        mysql_connect("localhost","root","");   
        mysql_select_db("pro_intermedia");
		$konten=$_POST['konten'];
        
       
        $simpan=$_POST['simpan'];   
       
        if (empty($konten)){
		   	echo '<a href="konten.php"></a>';
			
            }else{
        mysql_query("INSERT INTO konten VALUES ('','$konten')")or die (Error.mysql_error());
        //echo "<center><font color='#FF0000' size='+1'>Berhasil disimpan</font></center><br>";
                ?><script language="javascript">alert('konten Berhasil Disimpan')</script><?php
            ?><script>document.location.href="konten.php";</script><?php
    }
        
        ?>
		<form action="" method="POST" enctype="multipart/form-data" role="form" style="width: 70%;">
    <table width="100%" border="0" align="center" cellpadding="1" cellspacing="1">       
	  <tr>
      <td>Konten</td>
        <td>:</td>
        <td colspan="3">  <textarea rows="4" cols="100" class="form-control konten" name="konten" placeholder="Masukan konten?"></textarea></td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td colspan="3"><input type="submit" name="simpan" id="simpan" value="simpan" class="button"/></td>
      </tr>
    </table>
    </form>
	
	
    </table>
    </form>
	
	
                              </div>
                    </div>
                </div>
            </div>
		
	</table>

					</div>
				</div>
			</div>
		</div>	
						</div>
					</div>
				</div>
			</div>
  </div><!--/.row-->
		
	  <div class="row"></div><!--/.row-->
								
		<div class="row"><!--/.col--><!--/.col-->
  </div><!--/.row-->
  </div>	
	<!--/.main-->

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
		$('#calendar').datepicker({
		});

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>
</html>
<?php
?>