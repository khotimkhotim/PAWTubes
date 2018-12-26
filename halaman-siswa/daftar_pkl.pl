#!"C:\xampp\apache\perl\bin\perl.exe" 
print "Content-type:text/html\r\n\r\n";

use strict;
use CGI;
my $base_url = "http://localhost/Intermedia";
print "
<html>
<head>
    <meta name=”viewport” content=”width=device-width; initial-scale=1.0; maximum-scale=1.0;”>
	<title>Pro Intermedia</title>
    <link href="../Bootstrap/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../Bootstrap/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="../Bootstrap/dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="../Bootstrap/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
       
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
	 <!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
      <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Tempat Program Kerja Lapangan Pro Intermedia</a>
            </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
             <li><a href="../home.php">Home </a></li>						
                </div>
      </div>
</nav>

<div class="container theme-showcase" role="main">
  <!-- Main jumbotron for a primary marketing message or call to action -->
  		<div class="row">
       
      <div class="jumbotron">
            <h3><b><center>Pendaftaran Program Kerja Lapangan(PKL) Pro Intermedia</center></b></h3>
		<div class="row">
		<div class="col-md-12" align="center">
			<div class="panel panel-default">
				<div class="panel-heading">BIODATA LENGKAP SISWA PRAKERIN</div>
				<div class="panel-body">
                    <form action="daftar-pkl-proses.php" method="POST">
				    <fieldset>
                                       
						<table width="75%" border="0">                            
						<tr><td width="80"><h5 align="left">*Data Peserta</h5> </td></tr>
                            <tr>
						    <td width="80">NISN</td> <td width="9">:</td> 
                            <td width="350"><input type="text" name="nisn" required></td>
                            <td><br><br></td>
                        </tr>
                            
						<tr>
						    <td width="80">Nama Lengkap</td><td width="9">:</td> 
                            <td width="350"><input type="text" name="nama_siswa" required></td>
                            <td><br><br></td>
                        </tr>
                            
						<tr>
						    <td width="80">Tempat Lahir</td> <td width="9">:</td> 
                            <td width="350"><input type="text" name="tmp_lahir" required></td>
                            <td><br><br></td>
                        </tr>
                            
						<tr>
						    <td width="80">Tanggal Lahir</td> <td>:</td> 
                            <td width="350"><input type="date" name="tgl_lahir" required></td>  
                            <td><br><br></td>
                        </tr>
                            
						<tr>
                            <td width="80">Jenis Kelamin</td> <td width="9">:</td> 
                            <td width="350">
                                <select name="j_kelamin" required> 
                                <option value="Laki-laki">Laki-laki</option> 
                                <option value="Perempuan">Perempuan </option>
                                </select>
                            </td>
                            <td><br><br></td>
                            </tr>
                                        
						<tr>
						    <td width="80">No.Hp</td> <td width="9">:</td> 
                            <td width="350"><input type="text" name="no_hp" required></td>
                            <td><br><br></td>
                        </tr>
                                        
						<tr>
							<td width="80">Agama</td> <td width="9">:</td> 
                            <td width="350"><input type="text" name="agama" required></td>
                            <td><br><br></td>
                        </tr>
                                        
				        <tr>
							<td width="80">Alamat</td> <td width="9">:</td> 
                            <td width="350"><input type="text" style="width:280px" name="alamat" required></td>
                            <td><br><br></td>
                        </tr>
                                        
                        <tr>
						    <td width="80">Nama Sekolah</td> <td width="9">:</td> 
                            <td width="350"><input type="text" name="nama_sekolah" required></td>
                            <td><br><br></td>
                        </tr>
                        
                         <tr>
							<td width="80">Alamat Sekolah</td> <td width="9">:</td> 
                            <td width="350"><input type="text" style="width:280px" name="alamat_sekolah" required></td>
                            <td><br><br></td>
                        </tr>               
														                            
                        <tr>
						    <td width="80">Program Keahlian Peserta</td> <td width="9">:</td> 
                            <td width="350"><input type="text" name="program_keahlian" required></td>
                            <td><br><br></td>
                        </tr>
                                        
                        <tr>
						    <td width="80">Email</td> <td width="9">:</td> 
                            <td width="350"><input type="email" name="email" required></td>
                            <td><br><br></td>
                        </tr> 
                                        
                        <tr>
						    <td width="80">Social media</td> <td width="9">:</td> 
                            <td width="350"><input type="text" name="social_media" required></td>
                            <td><br><br></td>
                        </tr>                 
                                        
                        <tr>
                            <td width="80">Awal PKL Bulan</td> <td width="9">:</td> 
                            <td width="70">
                                <select name="awal_magang" required> 
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
                            <td width="280">Sampai Bulan</td> <td width="9">:</td> 
                                <td width="70">
                                <select name="selesai_bulan" required> 
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
                            <td><br><br></td>
                            </tr>      
                            
                            <tr>
                                <td><h5 align="left">*Data Pembimbing Prakerin</h5></td>
                            </tr>        
                                        
                            <tr>
                            <td width="80">Nama</td> <td width="9">:</td> 
                            <td width="70">
                                <input type="text" name="nama_pembimbing" required>
                            </td>
                            </tr>
                            <tr>
                            <td width="80">No.HP/Telp.</td> <td width="9">:</td> 
                            
                                <td width="70">
                                <input type="text" name="no_hp_pembimbing" required>
                            </td>
                            <td><br><br></td>
                            </tr>  
                
                
                            <tr>
                                <td><h5 align="left">*Data Orang Tua Peserta</h5></td>
                            </tr>        
                                        
                            <tr>
                            <td width="80">Nama Ayah</td> <td width="9">:</td> 
                            <td width="70">
                                <input type="text" name="nama_ayah" required>
                            </td>
                            </tr>
                            
                            <td width="80">Pekerjaan</td> <td width="9">:</td> 
                            
                                <td width="70">
                                <input type="text" name="pekerjaan_ayah" required>
                            </td>
                            <td><br><br></td>
                            </tr>
            
                            <tr>
                            <td width="80">Nama Ibu</td> <td width="9">:</td> 
                            <td width="70">
                                <input type="text" name="nama_ibu" required></td>
                            </tr>
                        <tr>
                            <td width="80">Pekerjaan</td> <td width="9">:</td>                         
                                <td width="70">
                                <input type="text" name="pekerjaan_ibu" required>
                            </td>
                            <td><br><br></td>
                            </tr>
                        
                        <tr>
                            <td width="80">No. HP/Telp</td> <td width="9">:</td>                         
                                <td width="70">
                                <input type="text" name="no_hp_ortu" required>
                            </td>
                            <td><br><br></td>
                            </tr>
                                    
                            <tr>
                                <td><h5 align="left">*Lain-lain</h5></td>
                            </tr>
                            <tr>
                            <td width="80">Sebutkan Sakit yang pernah di alami</td> <td width="9">:</td> 
                            <td width="70">
                                <input type="text" name="sakit_dialami" required>
                            </td>
                            <td><br><br></td>
                            </tr>
                        
                            <tr>
                            <td width="80">Sudah Memiliki Laptop</td> <td width="9">:</td> 
                            <td width="350">
                                <select name="memiliki_laptop" required> 
                                <option value="Ya">Sudah</option> 
                                <option value="Belum memiliki">Belum memiliki </option>
                                </select>
                            </td>
                            <td><br><br></td>
                            </tr>
            
                            <tr>
                                <td><h5 align="left">*Tambahan</h5></td>
                            </tr>
            
                            <tr>
                                <td width="1900"><h5>1. Tuliskan materi dan praktek selama di sekolah</h5></td>
                                <td width="9">:</td> 
                            <td width="170">
                                <input type="text" name="materi_praktek" placeholder="Misalkan Jaringan, dll. pisahkan dengan koma (,)" style="width:350px" required></td>
                            </tr>
            
                            <tr>
                                <td><h5 >2. Tuliskan kemampuan/skill yang dikuasai saat ini</h5></td>
                                <td width="9">:</td> 
                            <td width="170">
                                <input type="text" name="kemampuan_skill" placeholder="Misal lebih dari 1,pisahkan dengan koma (,)" style="width:350px" required></td>
                            </tr>
            
                            <tr>
                                <td><h5 >3. Tuliskan hobi yang anda sukai selama ini</h5></td>
                                <td width="9">:</td> 
                            <td width="170">
                                <input type="text" name="hobi" placeholder="Misal lebih dari 1,pisahkan dengan koma (,)" style="width:350px" required></td>
                            </tr>
            
                            <tr>
                                <td><h5 >4. Setelah lulus Sekolah ingin Kuliah / Bekerja ?</h5></td>
                                <td width="9">:</td> 
                            <td width="70">
                                <select name="setelah_lulus" required> 
                                <option value="Kuliah">Kuliah</option> 
                                <option value="Bekerja">Bekerja</option>
                                </select>
                                </td>
                            </tr>
                        
                        <tr hidden="hidden">
                                <td><h5 >Status Siswa</h5></td>
                                <td width="9">:</td> 
                            <td width="70">
                                <select name="status_siswa" required> 
                                <option value="Terdaftar">Terdaftar</option> 
                                </select>
                                </td>
                            </tr>
                        
            
							<tr><td>					
                            <button class="btn btn-primary" type="submit" name="submit">Simpan Data</button>                                </td></tr>                                                        
							</table>
						</fieldset>
					</form>
				</div>
			</div>
			</div>
<br>
 <br>
 
        </div>
      </div>
      </div>
       </div>
    </div>
  </div>
      </div>
      </div>
       </div>
    
     <!-- / main body -->
   </main>
  </div>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row4">
  <div class="rounded">
    <footer id="footer" class="clear">       
      <div class="one_third" align="center">
        <address>
        <br>         
        Pro Intermedia Yogyakarta <br>         
          </address>        
            </div>
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
";