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
					<a href="../index.php" class="logo pull-left"><img src="../themes/images/DINUSMARKET.png" class="site_logo" alt=""></a>
					<nav id="menu" class="pull-right"> </nav>
				</div>
			</section>			
			<section class="header_text sub">
		  <img class="pageBanner" src="../themes/images/dinussharing kecil.jpg" alt="New products" ></section>			
			<section class="main-content">				
				<div class="row">
					<div class="span5">					
						<h4 class="title"><span class="text"><strong>data</strong> iklan</span></h4>
						<form action="#" method="post">
						  <fieldset>
						    <div class="control-group">
								  <div class="controls"></div>
						    </div>
<div class="control-group">
<p>
  <?php
include "../koneksi.php";
$tampil="SELECT * FROM pasangiklan ";
$jalantampil=mysql_query($tampil) or die (mysql_error()); 


?>

</p>
<table width="1026" height="90" border="1" align="center">
  <tr align="center" valign="top" class="badge-info">
    <td width="28">no </td>
    <td width="101">Tanggal</td>
    <td width="48">E-mail</td>
    <td width="57">Iklan Sebagai</td>
    <td width="78">Kategori</td>
    <td width="56">No HP</td>
    <td width="45">Judul</td>
    <td width="206">Teks Iklan</td>
    <td width="41">Harga</td>
    <td width="52">Gambar</td>
    <td width="244">&nbsp;</td>
  </tr>
  <?php
  while ($arraytampil=mysql_fetch_array($jalantampil)){
  ?>
   <tr><td align="center" valign="top"><?php echo "$arraytampil[0]<br>"; ?>
    <td><?php echo "$arraytampil[1]<br>"; ?></td>
    <td><?php echo "$arraytampil[2]<br>"; ?></td>
    <td><?php echo "$arraytampil[3]<br>"; ?></td>
    <td><?php echo "$arraytampil[4]<br>"; ?></td>
    <td><?php echo "$arraytampil[5]<br>"; ?></td>
    <td><?php echo "$arraytampil[6]<br>"; ?></td>
    <td><?php echo "$arraytampil[7]<br>"; ?></td>
    <td><?php echo "$arraytampil[8]<br>"; ?></td>
 
     <td><img src="<?php echo "imgdata/$arraytampil[9]<br>"; ?>" alt=""></td>
   
    <td width="244"><a href="del-gambar.php?id=  <?php  echo "$arraytampil[0]";?>" > 
     <input name="" type="button" value="Delete">   <input name="" type="button" value="edit"> <input name="" type="button" value="view">  </a> 
    </a> </td>
  </tr>
  <?php } ?>
</table>

<br><hr>

<hr>
						    </div>
						  </fieldset>
					  </form>				
				  </div>
				</div>
			</section>			
			<section id="footer-bar">
				<div class="row"></div>	
			</section>
			<section id="copyright"><span>tugas pi by yoga indra pangestu</span></section>
		</div>
		<script src="../themes/js/common.js"></script>
		<script>
			$(document).ready(function() {
				$('#checkout').click(function (e) {
					document.location.href = "checkout.html";
				})
			});
		</script>		
    </body>
</html>