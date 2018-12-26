<?php
include "Connections/koneksi.php";

$kode = $_GET['nisn'];
$data1 = mysql_query("SELECT * FROM data_siswa_pkl WHERE nisn = '$kode'");
$lihat1 = mysql_fetch_array($data1);
?>
<html lang="en">
		<h2><center>Form Absensi Siswa</h2></center>

<!-- membuat tabel untuk menampilkan data -->
  <div class="col-sm-9 col-sm-offset-6 col-lg-10 col-lg-offset-3 main">			
		<div class="row">
                    <form action="input_absensi.php" method="POST">
                        <input type="hidden" name="nisn" value="<?php echo $lihat1['nisn']?>"/>
                        <input type="hidden" name="nama_siswa" value="<?php echo $lihat1['nama_siswa']?>"/>
				    <fieldset>
                                       
				<table width="75%" border="0" align="center">                
                            <tr>
						    <td width="80">NISN</td> <td width="9">:</td> 
                            <td width="350"><input type="text" name="kode"  value="<?php echo $lihat1['nisn']?>" disabled="disabled"/ ></td>
                            <td><br><br></td>
                        </tr>
                            
						<tr>
						    <td width="180">Nama Siswa</td><td width="9">:</td> 
                            <td width="350"><input type="texxt" name="password" value="<?php echo $lihat1['nama_siswa']?>" disabled="disabled" </td>
                            <td><br><br></td>
                        </tr>
                    
                    <tr>
						    <td width="80">Kegiatan Hari ini</td><td width="9">:</td> 
                            <td width="350"><textarea name="kegiatan"></textarea></td>
                            <td><br><br></td>
                        </tr>
                    
                    <tr hidden="hidden">
                                <td><h5 >Status Absensi</h5></td>
                                <td width="9">:</td> 
                            <td width="70">
                                <select name="status_absensi" required> 
                                <option value="Belum dikonfirmasi">Belum dikonfirmasi</option> 
                                </select>
                                </td>
                            </tr>
							<tr><td>					
                            <button class="btn btn-success" type="submit" name="submit">Simpan</button></td>
                                <td></td>
                                <td></td>
                                <td></td></tr>                                                
							</table>
						</fieldset>
					</form>
				</div>
			</div>
			</div>
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