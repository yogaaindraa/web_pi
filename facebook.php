<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>dinus market and sharing</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">      
		<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">		
		<link href="themes/css/bootstrappage.css" rel="stylesheet"/>
		
		<!-- global styles -->
		<link href="themes/css/flexslider.css" rel="stylesheet"/>
		<link href="themes/css/main.css" rel="stylesheet"/>

		<!-- scripts -->
		<script src="themes/js/jquery-1.7.2.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>				
		<script src="themes/js/superfish.js"></script>	
	<script src="themes/js/jquery.scrolltotop.js"></script>
		<!--[if lt IE 9]>			
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
	</head>
    <body>		
		<div id="top-bar" class="container">
			<div class="row">
				<div class="span4">
					<form method="POST" class="search_form">
						<input type="text" class="input-block-level search-query" Placeholder="eg. T-sirt">
					</form>
				</div>
				<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu">				
							<li>Email atau Telepon </li>
							<li>
							  <form name="form1" method="post" action="">
							    <label>
							      <input type="text" name="textfield" id="textfield">
						        </label>
						      </form>
							</li>				
							<li><a href="sharing_login.php">Sharing</a></li>	
							<li><a href="profil.php">Profil</a></li>	
                            <li><a href="pasangiklan.php">Pasang Iklan</a></li>	
                            <li><a href="index.php">LogOut</a></li>
					  </ul>
					</div>
				</div>
			</div>
		</div>
		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">
				  <h1>
				  <nav id="menu" class="pull-right"> </nav>
				mukabuku</h1>
				</div>
			</section>			
			<section class="header_text sub"></section>			
			<section class="main-content">				
				<div class="row">
					<div class="span5">					
						<h4 class="title"><span class="text"><strong>data</strong> pribadi</span></h4>
						<form action="#" method="post">
						  <fieldset>
						    <div class="control-group">
								  <div class="controls"></div>
						    </div>
<div class="control-group"><img src="themes/images/a.jpg" width="481" height="384">
				    <hr>
						    </div>
						  </fieldset>
					  </form>				
				  </div>
					<div class="span7">					
						<h4 class="title"><span class="text"><strong>data</strong> iklan</span></h4>
                        
                        <?php 
extract ($_POST);
extract ($_GET);
include "koneksi.php";
if($simpandata){


$myfile=$_FILES['gambar']['tmp_name'];
$nm_file=$_FILES['gambar']['name'];
	

$lokasifolder="admin/imgdata/".$nm_file;

if(!file_exists($lokasifolder)){
	move_uploaded_file($myfile,$lokasifolder);	
}

$simpan="INSERT INTO pasangiklan VAlUES ('','$tanggal','$email','$iklansebagai','$kategori','$nohp','$judul','$teksiklan','$hrg','$nm_file')";
$querysimpan=mysql_query($simpan)or die (mysql_error());
}
?>
						<form action="" method="post" class="form-stacked" enctype="multipart/form-data">
							<fieldset>
								<div class="control-group">
								  <div class="controls"><table width="455" border="0" align="center" bgcolor="#FFFFFF">
          
          <tr>
            <td>&nbsp;</td>
            <td>Tanggal</td>
            <td>:</td>
            <td><label>
              <input type="text" name="tanggal" id="tanggal">
            </label></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>E-mail</td>
            <td>:</td>
            <td><label>
              <input type="text" name="email" id="email">
            </label></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td width="1">&nbsp;</td>
            <td width="146">Pasang Iklan Sebagai </td>
            <td width="20">:</td>
            <td width="257"><strong>
               <select name="iklansebagai" id="iklansebagai">
                 <option value="pilih"> Pilih </option>
                 <option value="pribadi"> Pribadi  </option>
                 <option value="profesional"> Profesional  </option>
                  <option value="toko"> Toko </option>
                   <option value="agen"> Agen  </option>
               </select>
            </strong></td>
            <td width="9">&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><span class="style3">Kategori</span></td>
            <td>:</td>
            <td><strong>
              <select name="kategori" id="kategori">
                <option value="pilih"> Pilih  </option>
                <option value="kendaraan"> Kendaraan </option>
                <option value="elektronik"> Elektronik </option>
                </select>
              </strong></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>Update No HP / Pin BB</td>
            <td>:</td>
            <td><input type="text" name="nohp" id="nohp"></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>Judul</td>
            <td>:</td>
            <td><input type="text" name="judul" id="judul"></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>Teks Iklan</td>
            <td>:</td>
            <td><textarea name="teksiklan" id="teksiklan" cols="45" rows="5"></textarea></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>Harga</td>
            <td>:</td>
            <td>Rp 
              <input type="text" name="hrg" id="hrg"></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>Gambar</td>
            <td>:</td>
            <td> <input type="file" name="gambar" id="gambar"></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><div id="image_desc1"> Iklan dengan foto/gambar, lebih banyak direspon calon pembeli </div></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><p>
              <input type="submit" name="simpandata" value="Upload" />
            </p></td>
            <td>&nbsp;</td>
          </tr>
            </table></div>
								</div>
								<div class="control-group">
								  <div class="controls"></div>
								</div>
								<hr>
								<div class="actions"></div>
							</fieldset>
						</form>					
					</div>				
				</div>
			</section>			
			<section id="footer-bar">
				<div class="row"></div>	
			</section>
			<section id="copyright">Tugas pi By yoga indra pangestu</section>
		</div>
		<script src="themes/js/common.js"></script>
		<script>
			$(document).ready(function() {
				$('#checkout').click(function (e) {
					document.location.href = "checkout.html";
				})
			});
		</script>		
    </body>
</html>