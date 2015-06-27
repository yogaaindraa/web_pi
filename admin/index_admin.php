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
							<li><a href="index_admin.php">Home</a></li>		
							<li><a href="sharing.php">Sharing</a></li>
                            <li><a href="tampilpasangiklan.php">Data Pasang Iklan</a></li>
                             <li><a href="data_barang.php">Data Post Barang</a></li>
							<li><a href="halamanlogin.php">Log Out</a></li>			
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
			<section  class="homepage-slider" id="home-slider">
				<div class="flexslider">
					<ul class="slides">
						
                        <li>
							<img src="../themes/images/carousel/banner-7.jpg" alt="" />
						</li>
                        <li>
							<img src="../themes/images/carousel/banner-8.jpg" alt="" />
						</li>
                       
						
					</ul>
				</div>			
			</section>
            <?php
	extract ($_POST);
	extract ($_GET);
	if(isset($menu)){
		include "$menu.php";
	}
	else
	{
	
	?>
			<section class="header_text">
			  <p>Welcome to Admin Siadin  Market and Siadin Sharing<br/>
			  </p>
			  <p>
			    <?php } ?>
			  </p>
        </section>
			<section class="main-content">
		  <div class="row">
					<div class="span12">													
						<div class="row">
							<div class="span12">
								<h4 class="title"><span class="pull-right">
									<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
								</span>
							  </h4>
								<div id="myCarousel" class="myCarousel carousel slide">
									<div class="carousel-inner">
									  <div class="item">
									  <ul class="thumbnails">
												<li class="span3">
													<div class="product-box">
														<p><a href="../product_detail.html"><img src="../themes/images/ladies/1.5.jpeg" alt="" /></a></p>
														<a href="../product_detail.html" class="title">Nokia Lumia 1320</a><br/>
														<a href="../products.html" class="category">HP 01</a>
														<p class="price"> 	Rp 4.800.000,00</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="../product_detail.html"><img src="../themes/images/ladies/1.6.jpg" alt="" /></a></p>
														<a href="../product_detail.html" class="title">Ut wisi enim ad</a><br/>
														<a href="../products.html" class="category">Commodo consequat</a>
														<p class="price">$40.25</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="../product_detail.html"><img src="../themes/images/ladies/1.7.jpg" alt="" /></a></p>
														<a href="../product_detail.html" class="title">You think water</a><br/>
														<a href="../products.html" class="category">World once</a>
														<p class="price">$10.45</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="../product_detail.html"><img src="../themes/images/ladies/1.8.jpg" alt="" /></a></p>
														<a href="../product_detail.html" class="title">Quis nostrud exerci</a><br/>
														<a href="../products.html" class="category">Quis nostrud</a>
														<p class="price">$35.50</p>
													</div>
												</li>																																	
											</ul>
										</div>
									</div>							
								</div>
							</div>						
						</div>
						<br/>
						<div class="row feature_box">						
						  <div class="span4">
								<div class="service">
									<div class="responsive">	
										<img src="../themes/images/feature_img_2.png" alt="" />
										<h4>VISI <strong>UDINUS</strong></h4>
										<p>Universitas Dian Nuswantoro memiliki visi yaitu menjadi Universitas Pilihan Utama di bidang pendidikan dan kewirausahaan . <br>
                                        <a href="">read more</a></p>									
									</div>
								</div>
							</div>
							<div class="span4">	
								<div class="service">
									<div class="customize">			
										<img src="../themes/images/feature_img_1.png" alt="" />
									  <h4>MISI <strong>UDINUS</strong></h4>
										<p>Menyelenggarakan pendidikan tinggi yang berkualitas.</br>
Menumbuhkembangkan kreatifitas dan inovasi civitas akademika yang bermanfaat bagi masyarakat, pemerintah dan dunia usaha.<br>
<a href="">read more</a> </p>
									</div>
								</div>
							</div>
							<div class="span4">
								<div class="service">
									<div class="support">	
										<img src="../themes/images/feature_img_3.png" alt="" />
										<h4>SEJARAH <strong>UDINUS</strong></h4>
										<p>Pada tahun 1986, didirikan sebuah lembaga kursus komputer IMKA yang berlokasi di kota Semarang. Karena kegigihannya dalam membuka dan menciptakan peluang pasar serta ketahanannya dalam menghadapi berbagai rintangan, <br>
                                        <a href="">read more</a></p>
									</div>
								</div>
							</div>	
						</div>		
					</div>				
				</div>
			</section>
			<section class="our_client">
				<h4 class="title"><span class="text">Manufactures</span></h4>
				<div class="row">					
					<div class="span2">
						<a href="#"><img alt="" src="../themes/images/clients/144.png"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="../themes/images/clients/a.jpg"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="../themes/images/clients/b.jpg"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="../themes/images/clients/c.jpg"></a>
					</div>
					<div class="span2"><a href="#"><a href="#"><img alt="" src="../themes/images/clients/d.jpg"></a></div>
					<div class="span2">
						<a href="#"><img alt="" src="../themes/images/clients/e.jpg"></a>
					</div>
				</div>
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
			<section id="copyright"><span>tugas pi by yoga indra pangestu</span></section>
		</div>
		<script src="../themes/js/common.js"></script>
		<script src="../themes/js/jquery.flexslider-min.js"></script>
		<script type="text/javascript">
			$(function() {
				$(document).ready(function() {
					$('.flexslider').flexslider({
						animation: "fade",
						slideshowSpeed: 4000,
						animationSpeed: 600,
						controlNav: false,
						directionNav: true,
						controlsContainer: ".flex-container" // the container that holds the flexslider
					});
				});
			});
		</script>
    </body>
</html>