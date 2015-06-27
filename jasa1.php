
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
		<link href="themes/css/main.css" rel="stylesheet"/>
		<link href="themes/css/jquery.fancybox.css" rel="stylesheet"/>
				
		<!-- scripts -->
		<script src="themes/js/jquery-1.7.2.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>				
		<script src="themes/js/superfish.js"></script>	
		<script src="themes/js/jquery.scrolltotop.js"></script>
		<script src="themes/js/jquery.fancybox.js"></script>
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
							<li><a href="index.php">Home</a></li>				
							<li><a href="sharing.php">Sharing</a></li>	
							<li><a href="profil_home.php">Profil</a></li>	
                            <li><a href="login.php">login</a></li>	
					  </ul>
					</div>
				</div>
			</div>
		</div>
	<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
					<a href="index.html" class="logo pull-left"><img src="themes/images/DINUSMARKET.png" class="site_logo" alt=""></a>
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
			<section class="header_text sub">
			<img class="pageBanner" src="themes/images/dinussharing kecil.jpg" alt="New products" >
				<h4><span>jasa Detail</span></h4>
			</section>
			<section class="main-content">				
				<div class="row">						
					<div class="span9">
						<div class="row">
							<div class="span4"><a href="themes/images/ladies/1/.jpg" class="thumbnail" data-fancybox-group="group1" title="Description 1"><a href="themes/images/ladies/1/.jpg" class="thumbnail" data-fancybox-group="group1" title="Description 1"><a href="themes/images/ladies/1/.jpg" class="thumbnail" data-fancybox-group="group1" title="Description 1"></a><a href="themes/images/ladies/9/JASA ANTAR BARANG.jpg" class="thumbnail" data-fancybox-group="group1" title="Description 1"><img alt="" src="themes/images/ladies/9/JASA ANTAR BARANG.jpg"></a>
							  <ul class="thumbnails small">								
								<li class="span1"></li>								
							  </ul>
							    <p>&nbsp;</p>
							    <ul class="thumbnails small">
							      <li class="span1"></li>
							      <li class="span1"></li>
						      </ul>
					      </div>
<div class="span5">
							  <address>
<strong>Nama Barang	:</strong> Jasa Antar Barang<br>
								  <strong>Kondisi :</strong> <span>Baru</span><br>
								  <strong>Nomor Telepon/HP :</strong> <span>085727999888</span><br>								
							  </address>									
							  <h4>Harga : Rp 20.000,00</h4>
						  </div>
							<div class="span5">
							  <form class="form-inline">
								
                </label>
									<a href="jasa.php"><img alt="" src="themes/images/back.png"></a><br/>
									
								</form>
							</div>							
					  </div>
												 
				  </div>
					<div class="span9">
							  <h4 class="title"><span class="pull-right">
									  <a class="left button" href="#myCarousel-1" data-slide="prev"></a><a class="right button" href="#myCarousel-1" data-slide="next"></a>									</span>								</h4>
					</div>
				</div>
					</div>
					</div>
		</div>
<script src="themes/js/common.js"></script>
		<script>
			$(function () {
				$('#myTab a:first').tab('show');
				$('#myTab a').click(function (e) {
					e.preventDefault();
					$(this).tab('show');
				})
			})
			$(document).ready(function() {
				$('.thumbnail').fancybox({
					openEffect  : 'none',
					closeEffect : 'none'
				});
				
				$('#myCarousel-2').carousel({
                    interval: 2500
                });								
			});
		</script>
    </body>
</html>