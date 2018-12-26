<?php
include "koneksi.php";

$data = mysql_query("SELECT * FROM siswa_selesai_magang ORDER BY nisn")
    
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
<h2><center>Data Siswa selesai PKL</h2></center>

<!-- membuat tabel untuk menampilkan data -->
  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-1 main">			
		<div class="row">
		<!--/.row-->
                <table width="100%" class="table table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr class="info">
                                        <th width="50"><center>NISN</center></th>
                                        <th width="200"><center>Nama Siswa</center></th>
                                        <th width="320"><center>Program Keahlian</center></th>
                                        <th width="200"><center>Selesai PKL Bulan</center></th>            
                                        <th width="110"><center>Tahun</center></th>
										
                                        <th width="80"><center>Aksi</center></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                        <?php
				            while ($siswa = mysql_fetch_assoc($data)){
                                extract($siswa);
											echo "<tr>";
                                            echo "<td><center>$siswa[nisn]</center</td>";
		                                    echo "<td><center>$siswa[nama_siswa]</center></td>";
                                            echo "<td><center>$siswa[program_keahlian]</center></td>";
                                            echo "<td><center>$siswa[selesai_magang_bulan]</center></td>";
                                            echo "<td><center>$siswa[tahun_magang]</center></td>";
										echo "<td>
											<p> <a href='dashboard-admin.php?page=hapus_siswa_selesai&nisn=$siswa[nisn]'><span data-placement='top' data-toggle='tooltip' title='Hapus'><button class='btn btn-danger btn-xs' data-title='Hapus' data-toggle='modal' data-target='#myModal' ><span class='glyphicon glyphicon-trash'></span></button></a>       
										</td>
                                    </tr>
                                       "
                                                ?>
                                        <?php       }       ?>
                                    </tbody>
                            </table>
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
