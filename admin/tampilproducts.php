<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>dinus market and sharing</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">      
		<link href="../bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">		
		<link href="../themes/css/bootstrappage.css" rel="stylesheet"/>
		
		<!-- global styles -->
		<link href="../themes/css/flexslider.css" rel="stylesheet"/>
		<link href="../themes/css/main.css" rel="stylesheet"/>

		<!-- scripts -->
		<script src="../themes/js/jquery-1.7.2.min.js"></script>
		<script src="../bootstrap/js/bootstrap.min.js"></script>				
		<script src="../themes/js/superfish.js"></script>	
		<script src="../themes/js/jquery.scrolltotop.js"></script>
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
							<li><a href="../index.php">Dinus Market</a></li>		
							<li><a href="">Detile Market</a></li>
                            <li><a href="admin/tampilproducts.php">Chart Shopper</a></li>
							<li><a href="cekout.php">Chart Sharing</a></li>					
								
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
					<a href="" class="logo pull-left"><img src="../themes/images/DINUSSHARING.png" class="site_logo" alt=""></a>
					<nav id="menu" class="pull-right">
						
					</nav>
				</div>
			</section>	
			<section class="header_text sub">
			<img class="pageBanner" src="../themes/images/dinussharing kecil.jpg" alt="New products" >
				<h4><span>tampil  products</span></h4>
			</section>
			<section class="main-content">
			  <p>&nbsp;</p>
              
<?php
include "../koneksi.php";
$tampil="SELECT * FROM produk ";
$jalantampil=mysql_query($tampil) or die (mysql_error()); 
while($arraytampil=mysql_fetch_array($jalantampil)){

?>

<table width="387" border="0">
  <tr>
    <td width="75">&nbsp;</td>
    <td width="252">&nbsp;</td>
    <td width="38"><a href="del-produk.php?id=<?php echo "$arraytampil[0]";?>">delete </a></td>
  </tr>
  <tr>
    <td>tipe</td>
    <td><?php echo "$arraytampil[1]<br>"; ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>harga</td>
    <td><?php echo "$arraytampil[2]<br>"; ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>detile</td>
    <td><?php echo "$arraytampil[3]<br>"; ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Gambar</td>
    <td><?php echo "$arraytampil[4]<br>"; ?></td>
    <td>&nbsp;</td>
  </tr>
</table>
<br><hr>
<?php } ?>
  <br>
  
</fieldset>
			  <div class="row"></div>
			</section>
			<section id="footer-bar">
				<div class="row">
					<div class="span3">
						<h4>Navigation</h4>
						<ul class="nav">
							<li><a href="../index.html">Homepage</a></li>  
							<li><a href="../about.html">About Us</a></li>
							<li><a href="../contact.html">Contac Us</a></li>
							<li><a href="../cart.html">Your Cart</a></li>
							<li><a href="../register.html">Login</a></li>							
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
						<p class="logo"><img src="../themes/images/logo.png" class="site_logo" alt=""></p>
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
			<section id="copyright">
				<span>Copyright 2013 bootstrappage template  All right reserved.</span>
			</section>
		</div>
		<script src="../themes/js/common.js"></script>	
    </body>
</html>