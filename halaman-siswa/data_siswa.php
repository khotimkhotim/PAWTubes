<?php
include "Connections/koneksi.php";

if(empty($_SESSION['login_siswa'])){
	header("location:../login-user.php");
}
$data = mysql_query("SELECT * FROM data_siswa_pkl where nisn='$login_session' ");
?>
<html lang="en">
    <head>
    	<link href="Connections/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    </head>
<h2><center>Data Siswa PKL</h2></center>

<!-- membuat tabel untuk menampilkan data -->
  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
		<!--/.row-->
                <table class="table table-hover table-bordered ">
                    <thead>
                        <tr class="success">
                                        <th width="50"><center>NISN</center></th>
                                        <th width="150"><center>Nama Siswa</center></th>
                                        <th width="250"><center>Alamat</center></th>
                                        <th ><center>No. HP</center></th>
                                        <th><center>Status Magang</center></th>
										<th><center>Nama Sekolah</center></th>
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
                                            echo "<td>$siswa[no_hp]</td>";
                                            echo "<td>$siswa[status]</td>";
                                            echo "<td>$siswa[nama_sekolah]</td>";
                                                ?>
                                        <?php       }       ?>
                                    </tbody>
                            </table>
            *Silahkan lengkapi atau update data anda pada menu Edit Data<br>
            *Status Magang merupakan keputusan yang diberikanoleh perusahaan kepada anda<br>
            *Jika status masih "Terdaftar" maka perusahaan belum memproses data yang anda kirim<br>
            *Silahkan ubah password anda agar lebih aman
                            <!-- /.table-responsive -->
                        </div>
                    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="Connections/assets/js/jquery-1.12.2.min.js" type="text/javascript"> </script>
	<script src="Connections/assets/js/bootstrap.min.js" type="text/javascript"> </script>

</body>

</html>
