<?php
include "config/koneksi.php";

$data = mysql_query("SELECT * FROM data_siswa_pkl ORDER BY id_registrasi DESC");
    
?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="../layout_admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../layout_admin/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="../layout_admin/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">
    <link href="../layout_admin/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
    <link href="../layout_admin/dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="../layout_admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>
<html lang="en">
<h2><center>Data Siswa PKL</h2></center>
    <div id="notif"></div>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js";;></script>
    <script type="text/javascript">
    var last = 0;
    function check(){
    	var url = 'cek.php?last='+last;
    	$.get(url, {}, function(resp){
    		if(resp.result != false){
    			$("#notif").html(resp.result);
    			last = resp.last;
    		}
    		setTimeout("check()", 1000);
    	}, 'json');
    }
    $(document).ready(function(){
    	check();
    });
    </script>
<!-- membuat tabel untuk menampilkan data -->
  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-1 main">			
		<div class="row">
		<!--/.row-->
                <table width="100%" class="table table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr class="info">
                                        <th width="50"><center>NISN</center></th>
                                        <th width="200"><center>Nama Siswa</center></th>
                                        <th width="320"><center>Alamat</center></th>
                                        <th width="150"><center>Nama Sekolah</center></th>            
                                        <th width="110"><center>Status</center></th>
										
                                        <th width="110"><center>Aksi</center></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                        <?php
				            while ($siswa = mysql_fetch_assoc($data)){
                                extract($siswa);
											echo "<tr>";
                                            echo "<td><center>$siswa[nisn]</center</td>";
		                                    echo "<td><center>$siswa[nama_siswa]</center></td>";
                                            echo "<td><center>$siswa[alamat]</center></td>";
                                            echo "<td><center>$siswa[nama_sekolah]</center></td>";
    if ($siswa[status] == "Terdaftar"){
                                            echo "<td><center><a href=dashboard-admin.php?page=status_daftar&nisn=$siswa[nisn]>$siswa[status]</a></center></td>";
        }
        else if ($siswa[status] == "Diterima"){
                                            echo "<td><center><a href=dashboard-admin.php?page=input_siswa_aktif&nisn=$siswa[nisn]>$siswa[status]</a></center></td>";        
        }
        else if ($siswa[status] == "Aktif Magang"){
                                            echo "<td><center><a href=dashboard-admin.php?page=input_siswa&nisn=$siswa[nisn] title='Siswa Selesai Magang'>$siswa[status]</a></center></td>";        
        }
    else {
        echo "<td><center>$siswa[status]</center></td>"; 
    }
                                            
										echo "<td>
											<p>
												<a href=dashboard-admin.php?page=lihat_siswa&nisn=$siswa[nisn]>
                                                <span data-placement='top' data-toggle='tooltip' title='Lihat Data'>
                                                <button class='btn btn-primary btn-xs' data-title='Edit' data-toggle='modal' data-target='#edit'>
                                                <span class='glyphicon glyphicon-pencil'></span>
                                                </button>
                                                <span>
                                                </a>
                                                
                                                
                                                <a href='dashboard-admin.php?page=hapus_siswa&nisn=$siswa[nisn]'><span data-placement='top' data-toggle='tooltip' title='Hapus'><button class='btn btn-danger btn-xs' data-title='Hapus' data-toggle='modal' data-target='#myModal' ><span class='glyphicon glyphicon-trash'></span></button></a>        
                                                <a href='dashboard-admin.php?page=cetak&nisn=$siswa[nisn]'><span data-placement='top' data-toggle='tooltip' title='Cetak'><button class='btn btn-warning btn-xs' data-title='Cetak' data-toggle='modal' data-target='#myModal' ><span class='glyphicon glyphicon-print'></span></button></a>
										</td>
                                    </tr>
                                       "
                                                ?>
                                        <?php       }       ?>
                                    </tbody>
                            </table>
            *Ubah aktifasi siswa pada kolom siswa.<br>
            *Status "Terdaftar" menjadi "Diterima". <br>
            *Status "Diterima" menjadi "Aktif Magang".<br>
            *Status "Aktif Magang" menjadi "Selesai Magang".<br>
            *Jika perubahan status dari "Aktif Magang" menjadi "Selesai Magang", maka anda akan mengisi form terlebih dahulu.
                            <!-- /.table-responsive -->
                        </div>
                    </div>
    <!-- /#wrapper -->

    <script src="../layout_admin/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../layout_admin/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../layout_admin/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../layout_admin/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../layout_admin/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../layout_admin/vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../layout_admin/dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

</body>

</html>
