<?php
include "koneksi.php";

$kode = $_GET['nisn'];
$data1 = mysql_query("SELECT * FROM data_siswa_pkl WHERE nisn = '$kode'");
$update = "UPDATE data_siswa_pkl SET status = 'Selesai Magang' where nisn=$kode"; // update aktifasi siswa
$query = mysql_query($update);

$lihat1 = mysql_fetch_array($data1);
?>
<html lang="en">
		<h2><center>Input Data Siswa Selesai Magang</h2></center>

<!-- membuat tabel untuk menampilkan data -->
  <div class="col-sm-9 col-sm-offset-6 col-lg-10 col-lg-offset-3 main">			
		<div class="row">
                    <form action="dashboard-admin.php?page=input_proses" method="POST">
                        <input type="hidden" name="nisn" value="<?php echo $lihat1['nisn']?>"/>
                        <input type="hidden" name="nama_siswa" value="<?php echo $lihat1['nama_siswa']?>"/>

				    <fieldset>
                                       
				<table width="75%" border="0" align="center">                
                        <tr>
						    <td width="180">NISN</td> <td width="9">:</td> 
                            <td width="350"><input type="text"  value="<?php echo $lihat1['nisn']?>" disabled="disabled"/ ></td>
                            <td><br><br></td>
                        </tr>
                    
                        <tr>
						    <td width="80">Nama Siswa</td> <td width="9">:</td> 
                            <td width="350"><input type="text" value="<?php echo $lihat1['nama_siswa']?>" disabled="disabled"/ ></td>
                            <td><br><br></td>
                        </tr>
                    
                        <tr>
						    <td width="80">Program Keahlian Siswa</td> <td width="9">:</td> 
                            <td width="350"><input type="text" name="bidang_magang" ></td>
                            <td><br><br></td>
                        </tr>
                    
                        <tr>
                            <td width="80">Selesai Magang</td> <td width="9">:</td> 
                            <td width="70">
                                <select name="selesai_magang_bulan" required> 
                                <option value="Januari">Januari</option> 
                                <option value="Februari">Februari</option>
                                <option value="Maret">Maret</option>    
                                <option value="April">April</option> 
                                <option value="Mei">Mei</option> 
                                <option value="Juni">Juni</option> 
                                <option value="Juli">Juli</option> 
                                <option value="Agustus">Agustus</option> 
                                <option value="September">September</option> 
                                <option value="Oktober">Oktober</option> 
                                <option value="November">November</option> 
                                <option value="Desember">Desember</option> 
                                </select>
                                </td>
                            </tr>
                        
                        <tr>
						    <td width="80">Tahun</td> <td width="9">:</td> 
                            <td width="350"><input type="text" name="tahun" ></td>
                            <td><br><br></td>
                        </tr>
                            						
                     <tr>
                                <td><br></td>                            
                            </tr>
            
							<tr><td>					
                            <button class="btn btn-success" type="submit" >Simpan</button></td>
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