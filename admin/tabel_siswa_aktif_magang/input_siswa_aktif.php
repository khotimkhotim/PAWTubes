<?php
include "koneksi.php";

$kode = $_GET['nisn'];
$data1 = mysql_query("SELECT * FROM data_siswa_pkl WHERE nisn = '$kode'");
$update = "UPDATE data_siswa_pkl SET status = 'Aktif Magang' where nisn=$kode"; // update aktifasi siswa
$query = mysql_query($update);

$lihat1 = mysql_fetch_array($data1);
?>
<html lang="en">
    <body>
<!-- membuat tabel untuk menampilkan data -->
  <div class="col-sm-3 col-sm-offset-6 col-lg-7 col-lg-offset-2 main">	
		<div class="row">
            <div class="panel panel-default">
				<div class="panel-heading">INPUT SISWA AKTIF MAGANG</div>
				<div class="panel-body">
                    <form action="dashboard-admin.php?page=input_siswa_aktif_proses" method="POST">
                        <input type="hidden" name="nisn" value="<?php echo $lihat1['nisn']?>"/>
                        <input type="hidden" name="nama_siswa" value="<?php echo $lihat1['nama_siswa']?>"/>
                        
                        <input type="hidden" name="asal_sekolah" value="<?php echo $lihat1['nama_sekolah']?>"/>
                        
                        <input type="hidden" name="program_keahlian" value="<?php echo $lihat1['program_keahlian']?>"/>
                        
                        <input type="hidden" name="awal_bulan_pkl" value="<?php echo $lihat1['awal_magang']?>"/>
                        
                        <input type="hidden" name="selesai_bulan_pkl" value="<?php echo $lihat1['selesai_bulan']?>"/>
                        
                        <input type="hidden" name="nama_pembimbing_sekolah" value="<?php echo $lihat1['nama_pembimbing_sekolah']?>"/>

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
                            <td width="80">Asal Sekolah</td> <td width="9">:</td> 
                            <td width="70">
                                <input type="text" name="nama_pembimbing" value="<?php echo $lihat1['nama_sekolah']?>" disabled="disabled" required>
                            </td>
                            </tr>
                    
                        <tr>
						    <td width="80">Bidang Magang</td> <td width="9">:</td> 
                            <td width="350"><input type="text" value="<?php echo $lihat1['program_keahlian']?>"  disabled="disabled" ></td>
                            <td><br><br></td>
                        </tr>
                    
                        <tr>
						    <td width="80">Awal Magang bulan</td> <td width="9">:</td> 
                            <td width="350"><input type="text" value="<?php echo $lihat1['awal_magang']?>"  disabled="disabled" ></td>
                            <td><br><br></td>
                    
                        <tr>
						    <td width="80">Selesai Magang bulan</td> <td width="9">:</td> 
                            <td width="350"><input type="text" value="<?php echo $lihat1['selesai_bulan']?>"  disabled="disabled"></td>
                            <td><br><br></td>
                            
                        </tr>                                                                   
                        
                        <tr>
                            <td width="80">Nama Pembimbing Sekolah</td> <td width="9">:</td> 
                            <td width="70">
                                <input type="text" value="<?php echo $lihat1['nama_pembimbing_sekolah']?>" disabled="disabled" required>
                            </td>
                        </tr>
                    
                        <tr>
                            <td width="800">Nama Pembimbing Perusahaan</td> <td width="9">:</td> 
                            <td width="70">
                                <input type="text" name="nama_pembimbing_perusahaan" required>
                            </td>
                            <td><br><br></td>
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
                        <br>
                        *Silahkan isi pada bagian nama Pembimbing perusahaan dan tahun magang
					</form>
				</div>
          </div>
			</div>
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