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
<link rel="stylesheet" href="layout_admin/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="layout_admin/admin/dist/css/AdminLTE.min.css">
        <link rel="stylesheet" href="layout_admin/admin/dist/css/skins/_all-skins.min.css">
        <script src="layout_admin/admin/plugins/jQuery/jQuery-2.1.4.min.js"></script>
        <link rel="stylesheet" href="layout_admin/admin/dist/css/summernote.css">
        <script src="layout_admin/admin/dist/js/summernote.js"></script>
</head>

<body>
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <img src="foto/pklgo1.png" style="float:left;position: relative;">

		<a class="navbar-brand" href="dashboard-admin.php?page=home"><span>ADMIN</span></a>
						
	</nav>
<?php include'menu.php'; ?>		
    <div class="content-wrapper">
                    <!-- Main content -->
    <section class="content">    
		
		<?php
    if(isset($_GET['page']))
    {
        switch($_GET['page'])
        {
            case'home';
            include 'home.php';
            break;
            
            //tabel data siswa pkl
            case 'data_siswa';
            include'tabel_data_siswa/data_siswa.php';
            break;
            case 'lihat_siswa';
            include'tabel_data_siswa/lihat_siswa.php';
            break;
            case 'cetak_data_siswa';
            include 'tabel_data_siswa/cetak_data_siswa.php';            
            break;
            $order=3;
            case 'update_status';
            include'tabel_data_siswa/update_status.php';
            break;
            case 'hapus_siswa';
            include'tabel_data_siswa/hapus_siswa.php';
            break;
            case 'cetak';
            include'tabel_data_siswa/cetak.php';
            break;
            
            //status aktifasi siswa        
            case 'status_daftar';
            include'tabel_data_siswa/config/status_daftar.php';
            break;
            case 'status_diterima';
            include'tabel_data_siswa/config/status_diterima.php';
            break;
            case 'status_aktif';
            include'tabel_data_siswa/config/status_aktif.php';
            break;
            
            //input siswa ke tabel selesai magang
            case 'input_siswa';
            include'tabel_siswa_selesai_magang/input_siswa.php';
            break;
            case 'input_proses';
            include'tabel_siswa_selesai_magang/input_proses.php';
            break;
            case 'data_siswa_selesai_magang';
            include'tabel_siswa_selesai_magang/data_siswa_selesai_magang.php';
            break;
            case 'hapus_siswa_selesai';
            include'tabel_siswa_selesai_magang/hapus_siswa.php';
            break;
            
            //tabel siswa aktif magang
            case 'siswa_aktif';
            include 'tabel_siswa_aktif_magang/data_siswa_aktif_magang.php';
            break;
            case 'input_siswa_aktif';
            include'tabel_siswa_aktif_magang/input_siswa_aktif.php';
            break;
            case 'input_siswa_aktif_proses';
            include'tabel_siswa_aktif_magang/input_siswa_aktif_proses.php';
            break;
            case 'hapus_siswa_aktif';
            include'tabel_siswa_aktif_magang/hapus_siswa.php';
            break;
            
            
            //tabel absensi siswa
            case 'absensi_siswa';
            include 'tabel_absensi_siswa/data_absensi_siswa.php';
            break;
            case 'status_absensi';
            include 'tabel_absensi_siswa/update_status.php';
            break;
            
            //logout
            case'logout';
            include 'proses-logout.php';
            break;

        }
    }
?>

	</section>
        </div>

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
    
    <script src="layout_admin/bootstrap/js/bootstrap.min.js"></script>
        <script>
            $(document).ready(function () {
                $('.konten').summernote({
                    height: 300, // set editor height
                    minHeight: null, // set minimum height of editor
                    maxHeight: null, // set maximum height of editor
                    focus: true, // set focus to editable area after initializing summernote
                    toolbar: [
                        ['style', ['style']],
                        ['font', ['bold', 'italic', 'underline', 'clear']],
                        ['fontname', ['fontname']],
                        ['color', ['color']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['height', ['height']],
                        ['table', ['table']],
                        ['insert', ['link', 'hr']],
                        ['view', ['fullscreen', 'codeview']]
                    ],
                    
					onPaste: function (e) {
                        var bufferText = ((e.originalEvent || e).clipboardData || window.clipboardData).getData('Text');
                        e.preventDefault();
                        setTimeout(function () {
                            document.execCommand('insertText', false, bufferText);
                        }, 10);
					 }
					
					
					
                });
				
				
            });
        </script>
        <script src="layout_admin/admin/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="layout_admin/admin/plugins/datatables/dataTables.bootstrap.min.js"></script>
        <script>
            $(function () {
                $("#example1").DataTable({
                    "order": [[<?php echo $order; ?>, "desc"]]
                });
            });
        </script>
        <script>
            $.widget.bridge('uibutton', $.ui.button);
        </script>
        <!-- Sparkline -->
        <script src="layout_admin/admin/plugins/sparkline/jquery.sparkline.min.js"></script>
        <!-- jvectormap -->
        <script src="layout_admin/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="layout_admin/admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <!-- jQuery Knob Chart -->
        <script src="layout_admin/admin/plugins/knob/jquery.knob.js"></script>
        <!-- daterangepicker -->
        <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>-->
        <script src="layout_admin/admin/plugins/daterangepicker/daterangepicker.js"></script>
        <!-- datepicker -->
        <script src="layout_admin/admin/plugins/datepicker/bootstrap-datepicker.js"></script>
        <!-- Slimscroll -->
        <script src="layout_admin/admin/plugins/slimScroll/jquery.slimscroll.min.js"></script>
        <!-- FastClick -->
        <script src="layout_admin/admin/plugins/fastclick/fastclick.min.js"></script>
        <!-- AdminLTE App -->
        <script src="layout_admin/admin/dist/js/app.min.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="layout_admin/admin/dist/js/pages/dashboard.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="layout_admin/admin/dist/js/demo.js"></script>
        <script>
            $('#tgl_agenda').datepicker({
                format: 'dd-mm-yyyy'
            })
        </script>
</body>
</html>
<?php
?>