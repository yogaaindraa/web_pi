
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
						<input type="text" class="input-block-level search-query" Placeholder="Cari">
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
			<section  class="homepage-slider" id="home-slider">
				<div class="flexslider">
					<ul class="slides">
						
                        <li>
							<img src="themes/images/carousel/banner-7.jpg" alt="" />
						</li>
                        <li>
							<img src="themes/images/carousel/banner-8.jpg" alt="" />
						</li>
                       
						<li>
							<img src="themes/images/carousel/banner-1.jpg" alt="" />
							<div class="intro">
								<h1>Mid season sale</h1>
								<p><span>Up to 50% Off</span></p>
								<p><span>On selected items online and in stores</span></p>
							</div>
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
			  <p>Welcome to Siadin  Market <br/>
			Suatu aplikasi digunakan sebagai media bagi mahasiswa Universitas Dian Nuswantoro khususnya yang berjiwa wirausaha untuk melakukan kegiatan jual beli produk dan jasa secara online baik baru atau bekas yang berkualitas seperti jasa les privat coding, jasa pembuatan produk multimedia, produk handphone murah, computer, motor bekas, mobil bekas, dan barang-barang lain yang masih layak untuk digunakan .</p>
			  <p>
			    <?php } ?>
			  </p>
        </section>
			<section class="main-content">
		  <div class="row">
					<div class="span12">													
						<div class="row">
							<div class="span12">
								<h4 class="title">
									<span class="pull-left"><span class="text"><span class="line">newest <strong>products</strong></span></span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel" class="myCarousel carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails">												
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="product_detail.html"><img src="themes/images/ladies/1.1.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">Samsung Galaxy S5 </a><br/>
														<a href="products.html" class="category">Elektronik</a>
														<p class="price">Rp. 7.899.000,00</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="product_detail.html"><img src="themes/images/ladies/1.2.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">Samsung P3110 Galaxy Tab 2 7.0 Wi Fi</a><br/>
														<a href="products.html" class="category">Elektronik</a>
														<p class="price">Rp 1.675.000,00</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.html"><img src="themes/images/ladies/1.3.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">Asus A46CM-WX091D/H : </a><br/>
														<a href="products.html" class="category">Elektronik</a>
														<p class="price">Rp.5.485.000</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.html"><img src="themes/images/ladies/1.4.png" alt="" /></a></p>
														<a href="product_detail.html" class="title">Samsung Galaxy S4</a><br/>
														<a href="products.html" class="category">Elektronik</a>
														<p class="price">Rp 6.700.000,00</p>
													</div>
												</li>
											</ul>
										</div>
										<div class="item">
											<ul class="thumbnails">
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.html"><img src="themes/images/ladies/1.5.jpeg" alt="" /></a></p>
														<a href="product_detail.html" class="title">Nokia Lumia 1320</a><br/>
														<a href="products.html" class="category">HP 01</a>
														<p class="price"> 	Rp 4.800.000,00</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.html"><img src="themes/images/ladies/1.6.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">Ut wisi enim ad</a><br/>
														<a href="products.html" class="category">Commodo consequat</a>
														<p class="price">$40.25</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.html"><img src="themes/images/ladies/1.7.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">You think water</a><br/>
														<a href="products.html" class="category">World once</a>
														<p class="price">$10.45</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.html"><img src="themes/images/ladies/1.8.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">Quis nostrud exerci</a><br/>
														<a href="products.html" class="category">Quis nostrud</a>
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
						<div class="row">
							<div class="span12">
								<h4 class="title">
									<span class="pull-left"><span class="text"><span class="line">Latest <strong>Products</strong></span></span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel-2" data-slide="prev"></a><a class="right button" href="#myCarousel-2" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel-2" class="myCarousel carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails">												
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="product_detail.html"><img src="themes/images/cloth/1.1.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">HONDA JUPITER MX</a><br/>
														<a href="products.html" class="category">Kendaraan</a>
													    <p class="price">Rp 10.000.000, 00</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
                                                    
                                                    <p><a href="product_detail.html"><img src="themes/images/cloth/1.5.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">Nike Zoom Fly</a><br/>
														<a href="products.html" class="category">Sepatu</a>
														<p class="price">Rp 1.099.000,00</p>
														
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
                                                    	<p><a href="product_detail.html"><img src="themes/images/cloth/1.6.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">DEFQON.1 2012 HOODED SWEATER RED, WOMEN</a><br/>
														<a href="products.html" class="category">sweater</a>
														<p class="price">Rp 760.000,00</p>
														
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.html"><img src="themes/images/cloth/1.4.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">HEADPHONE</a><br/>
														<a href="products.html" class="category">Elektronik</a>
														<p class="price">Rp 200.000,00</p>
													</div>
												</li>
											</ul>
										</div>
										<div class="item">
											<ul class="thumbnails">
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.html"><img src="themes/images/cloth/1.2.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">TAS Quenzaa</a><br/>
														<a href="products.html" class="category">fashion</a>
														<p class="price">Rp 300.000,00</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.html"><img src="themes/images/cloth/1.3.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">Headphone</a><br/>
														<a href="products.html" class="category">Elektronik</a>
														<p class="price">Rp 250.000,00</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.html"><img src="themes/images/cloth/1.7.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">Savage Gear Hooded Sweater</a><br/>
														<a href="products.html" class="category">sweater</a>
														<p class="price">Rp 899.000,00</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.html"><img src="themes/images/cloth/1.8.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">New Balance Summer Solution 574</a><br/>
														<a href="products.html" class="category">Sepatu</a>
														<p class="price">Rp 899.000,00</p>
													</div>
												</li>																																	
											</ul>
										</div>
									</div>							
								</div>
							</div>						
						</div>
						<div class="row feature_box">						
							<div class="span4">
								<div class="service">
									<div class="responsive">	
										<img src="themes/images/feature_img_2.png" alt="" />
										<h4>VISI <strong>UDINUS</strong></h4>
										<p>Universitas Dian Nuswantoro memiliki visi yaitu menjadi Universitas Pilihan Utama di bidang pendidikan dan kewirausahaan . <br> <a href="">read more</a></p>									
									</div>
								</div>
							</div>
							<div class="span4">	
								<div class="service">
									<div class="customize">			
										<img src="themes/images/feature_img_1.png" alt="" />
										<h4>MISI <strong>UDINUS</strong></h4>
										<p>Menyelenggarakan pendidikan tinggi yang berkualitas.</br>
Menumbuhkembangkan kreatifitas dan inovasi civitas akademika yang bermanfaat bagi masyarakat, pemerintah dan dunia usaha.<br> <a href="">read more</a>
</p>
									</div>
								</div>
							</div>
							<div class="span4">
								<div class="service">
									<div class="support">	
										<img src="themes/images/feature_img_3.png" alt="" />
										<h4>SEJARAH <strong>UDINUS</strong></h4>
										<p>Pada tahun 1986, didirikan sebuah lembaga kursus komputer IMKA yang berlokasi di kota Semarang. Karena kegigihannya dalam membuka dan menciptakan peluang pasar serta ketahanannya dalam menghadapi berbagai rintangan, <br> <a href="">read more</a> </p>
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
						<a href="#"><img alt="" src="themes/images/clients/144.png"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="themes/images/clients/a.jpg"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="themes/images/clients/b.jpg"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="themes/images/clients/c.jpg"></a>
					</div>
					<div class="span2"><a href="#"><a href="#"><img alt="" src="themes/images/clients/d.jpg"></a></div>
					<div class="span2">
						<a href="#"><img alt="" src="themes/images/clients/e.jpg"></a>
					</div>
				</div>
			</section>
			<section id="footer-bar">
				<div class="row"></div>	
			</section>
			<section id="copyright">Tugas pi By yoga indra pangestu</section>
		</div>
		<script src="themes/js/common.js"></script>
		<script src="themes/js/jquery.flexslider-min.js"></script>
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