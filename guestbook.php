
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
					<form action="" method="post">
						<input type="text" class="input-block-level search-query" Placeholder="Cari ">
					</form>
				</div>
				<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu">				
							<li><a href="dinus.php">Dinus Sharing</a></li>	
							<li><a href="guestbook.php">guestbook</a></li>	
                            <li><a href="login.php">Pasang Iklan</a></li>		
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
					<a href="index.php" class="logo pull-left"><img src="themes/images/DINUSMARKET.png" class="site_logo" alt=""></a>
					<nav id="menu" class="pull-right">
						<ul>
							<li><a href="">kendaraan</a>					
								<ul>
									<li><a href="motor.php">Motor</a></li>									
									<li><a href="">Mobil</a></li>
									<li><a href="">Aksesoris</a></li>									
								</ul>
							</li>															
						 
                           <li><a href="">elektronik</a>
<ul>
									<li><a href="laptop.php">laptop</a></li>									
									<li><a href="">HP</a></li>
                                    <li><a href="">Camera</a></li>
									<li><a href="">Aksesoris</a></li>									
							 </ul>
                          </li>
                           		
					    						
						  <li><a href="">Fashion</a>
<ul>
									<li><a href="pria.php">Pria</a></li>									
									<li><a href="wanita.php">Wanita</a></li>
									<li><a href="">Aksesoris</a></li>									
							</ul>
                          </li>
				      <li><a href="jasa.php">Jasa</a></li>
							
					  </ul>
					</nav>
				</div>
			</section>							
			<section class="google_map"></section>
			<section class="header_text sub">
	      <img class="pageBanner" src="themes/images/dinussharing kecil.jpg" alt="New products" ></section>
			<section class="main-content">				
			  <div class="row">				
					<div class="span5">
						<div>
							<h5>ADDITIONAL INFORMATION</h5>
							<p><strong>Phone:</strong> 085-727-426-188<br>
							  <strong>Fax:</strong>&nbsp;+04 (123) 456-7890<br>
							  <strong>Email:</strong>&nbsp;yogaaindraa20@gmail.com</p>
							Atau 
							<p><strong>Phone:</strong>&nbsp;087-834-655-015<br>
							<strong>Fax:</strong>&nbsp;+04 (113) 023-1145<br>
							<strong>Email:</strong>&nbsp;icha@gmail.com</p>
						</div>
					</div>
					<div class="span7">



<fieldset>
	<legend>Ketik artikel baru </legend>
    <br>
<form action="" method="post">
		<p>Nama :<br>
  <input name="nama" id="nama" type="text">        
  <p>email :<p>
		  <input name="email" id="email" type="text">  
  <p>komentar :    <br>
    <textarea cols="80" id="komentar" name="komentar" rows="10"></textarea>
    
    
    <input name="simpan" type="submit" id="simpan" value="submit">
</form>
	

</fieldset>

<?php
include "koneksi.php";
//$tanggal=date("l, d F Y H:i:s");
if(isset($_POST['simpan'])){
$simpan="INSERT INTO guestbook VAlUES ('','".$_POST['nama']."','".$_POST['email']."','".$_POST['komentar']."')";
$querysimpan=mysql_query($simpan) or die (mysql_error());
}
?>  
  <br><hr>


					</div>				
			  </div>
			</section>			
			<section id="footer-bar">
				<div class="row"></div>	
			</section>
			<section id="copyright">Tugas pi By yoga indra pangestu</section>
		</div>
		<script src="themes/js/common.js"></script>		
    </body>
</html>