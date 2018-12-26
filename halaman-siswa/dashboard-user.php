<?php
include('session.php');
include "Connections/koneksi.php";
include "Connections/fungsi.php";
?>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Dashboard Siswa</title>

<link href="../admin/css/bootstrap.min.css" rel="stylesheet">
<link href="../admin/css/datepicker3.css" rel="stylesheet">
<link href="../admin/css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" href="../admin/layout_admin/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../admin/layout_admin/admin/dist/css/AdminLTE.min.css">
        <link rel="stylesheet" href="../admin/layout_admin/admin/dist/css/skins/_all-skins.min.css">
        <script src="layout_admin/admin/plugins/jQuery/jQuery-2.1.4.min.js"></script>
        <link rel="stylesheet" href="layout_admin/admin/dist/css/summernote.css">
        <script src="../admin/layout_admin/admin/dist/js/summernote.js"></script>
    
    
</head>

<body>
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span> 
				</button>
                
                <a class="navbar-brand"><span>Selamat Datang </span><?php echo $login_session; ?></a>
                
			</div>            
		</div>
	</nav>
	<div id="#sidebar-collapse">
        
<?php include'menu.php'; ?>		
    <section class="content">
		
		<?php
    if(isset($_GET['page']))
    {
        switch($_GET['page'])
        {
            case 'data_siswa';
            include'data_siswa.php';
            break;
            //tabel data siswa pkl
            case 'edit_data';
            include'edit_data.php';
            break;
            $order=3; 
            case 'dashboard';
            include'data_siswa.php';
            break;
            case 'cetak';
            include'cetak.php';
            break;
            case 'ubah_password';
            include'ubah_password.php';
            break;
            case 'form_absensi';
            include'form_absensi.php';
            break;
            case'data_absensi_siswa';
            include 'data_absensi_siswa.php';
            break;
            case'logout';
            include 'logout.php';
            break;
        }
    }
?>

	</section>
</div> 
    

	<script src="../admin/js/jquery-1.11.1.min.js"></script>
	<script src="../admin/js/bootstrap.min.js"></script>
	<script src="../admin/js/chart.min.js"></script>
	<script src="../admin/js/chart-data.js"></script>
	<script src="../admin/js/easypiechart.js"></script>
	<script src="../admin/js/easypiechart-data.js"></script>
	<script src="../admin/js/bootstrap-datepicker.js"></script>
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