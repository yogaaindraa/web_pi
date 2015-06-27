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
							<li><a href="index.php">Dinus Market</a></li>
							<li><a href="product_detail.php">Detile Produk</a></li>
							<li><a href="products.php">Shopper Product</a></li>					
							<li><a href="guestbook.php">guestbook</a></li>			
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
									<li><a href="">Motor</a></li>									
									<li><a href="">Mobil</a></li>
									<li><a href="">Aksesoris</a></li>									
								</ul>
							</li>															
						 
                           <li><a href="">elektronik</a>
<ul>
									<li><a href="">laptop</a></li>									
									<li><a href="">HP</a></li>
									<li><a href="">Aksesoris</a></li>									
								</ul>
                           </li>
                           		
					    <li><a href="">Sport</a>
<ul>									
									<li><a href="">Gifts and Tech</a></li>
									<li><a href="">Ties and Hats</a></li>
									<li><a href="">Cold Weather</a></li>
								</ul>
							</li>							
						  <li><a href="">Fashion</a>
<ul>
									<li><a href="">Pria</a></li>									
									<li><a href="">Wanita</a></li>
									<li><a href="">Aksesoris</a></li>									
								</ul>
                                </li>
				    <li><a href="">Best Seller</a></li>
							<li><a href="">Top Seller</a></li>
						</ul>
					</nav>
				</div>
			</section>	
			<section class="header_text sub">
			<img class="pageBanner" src="themes/images/dinussharing kecil.jpg" alt="New products" >
				<h4><span>insert  products</span></h4>
			</section>
			<section class="main-content">
<?php 
extract ($_POST);
extract ($_GET);
include "koneksi.php";
if($simpan){


$myfile=$_FILES['gambar']['tmp_name'];
$nm_file=$_FILES['gambar']['name'];
	

$lokasifolder="imgdata/".$nm_file;

if(!file_exists($lokasifolder)){
	move_uploaded_file($myfile,$lokasifolder);	
}

$simpan="INSERT INTO produk VAlUES ('','".$_POST['tipe']."','".$_POST['harga']."','".$_POST['detile']."','$nm_file')";
$querysimpan=mysql_query($simpan)or die (mysql_error());
}
?>

<p>&nbsp;</p>
<form action="" method="post">
<table width="765" border="0" align="center">
  <tr>
    <td width="182" align="center" valign="top">Tipe</td>
    <td width="312"><input name="tipe" id="tipe" type="text" /></td>
    
  </tr>
  <tr>
    <td align="center" valign="top">Harga</td>
    <td><input name="harga" id="harga" type="text" /></td>
    
  </tr>
  <tr>
    <td align="center" valign="top">Detile</td>
    <td><textarea cols="80" id="detile" name="detile" rows="10"></textarea></td>
    
  </tr>
  <tr>
    <td align="center" valign="top">Gambar</td>
    <td> <input type="file" name="gambar" id="gambar"></td>
    <td width="257"><input name="simpan" type="submit" id="simpan" value="submit" /></td>
   
  </tr>
</table>
</form>
			  <div class="row"></div>
			</section>
			<section id="footer-bar">
				<div class="row">
					<div class="span3">
						<h4>Navigation</h4>
						<ul class="nav">
							<li><a href="index.html">Homepage</a></li>  
							<li><a href="about.html">About Us</a></li>
							<li><a href="contact.html">Contac Us</a></li>
							<li><a href="cart.html">Your Cart</a></li>
							<li><a href="register.html">Login</a></li>							
						</ul>					
					</div>
					<div class="span4">
						<h4>My Account</h4>
						<ul class="nav">
							<li><a href="#">My Account</a></li>
							<li><a href="#">Order History</a></li>
							<li><a href="#">Wish List</a></li>
							<li><a href="#">Newsletter</a></li>
						</ul>
					</div>
					<div class="span5">
						<p class="logo"><img src="themes/images/logo.png" class="site_logo" alt=""></p>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. the  Lorem Ipsum has been the industry's standard dummy text ever since the you.</p>
						<br/>
						<span class="social_icons">
							<a class="facebook" href="#">Facebook</a>
							<a class="twitter" href="#">Twitter</a>
							<a class="skype" href="#">Skype</a>
							<a class="vimeo" href="#">Vimeo</a>
						</span>
					</div>					
				</div>	
			</section>
			<section id="copyright">Tugas pi By yoga indra pangestu</section>
		</div>
		<script src="themes/js/common.js"></script>	
    </body>
</html>