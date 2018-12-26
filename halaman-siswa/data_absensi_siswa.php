<?php
include "Connections/koneksi.php";

if(empty($_SESSION['login_siswa'])){
	header("location:../login-user.php");
}
$data = mysql_query("SELECT * FROM absensi_siswa where nisn='$login_session' ");
?>
<html lang="en">
    <head>
    	<link href="Connections/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    </head>
    <h2><center>Data Absensi Siswa </h2></center>

<!-- membuat tabel untuk menampilkan data -->
  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
		<!--/.row-->
            <div class="table-responsive">
                <table class="table table-striped ">
                    <thead>
                        <tr>
                                        <th width="50"><center>NISN</center></th>
                                        <th width="150"><center>Nama Siswa</center></th>
                                        <th width="250"><center>Tanggal</center></th>
                                        <th width="150"><center>Status Absensi</center></th>
                                        <th><center>Kegiatan</center></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                        <?php
				            while ($siswa = mysql_fetch_assoc($data)){
                                extract($siswa);
											echo "<tr>";
                                            echo "<td><center>$siswa[nisn]</center</td>";
		                                    echo "<td><center>$siswa[nama_siswa]</center></td>";
                                            echo "<td><center>$siswa[tanggal]</center></td>";
                                            echo "<td>$siswa[status]</td>";
                                            echo "<td>$siswa[kegiatan]</td>";

                                                ?>
                                        <?php       }       ?>
                                    </tbody>
                            </table>
            *Jika status masih "Belum Dikonfirmasi" maka admin belum memproses absensi anda hari ini<br>                            <!-- /.table-responsive -->
                        </div>
            </div>
                    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="Connections/assets/js/jquery-1.12.2.min.js" type="text/javascript"> </script>
	<script src="Connections/assets/js/bootstrap.min.js" type="text/javascript"> </script>

</body>

</html>
