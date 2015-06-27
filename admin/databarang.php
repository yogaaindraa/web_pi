<?php
if(empty($_SESSION['username'])){
			echo "<p style='color:red'>akses denied</p>";
		exit();		
	}
?>
<?php 
//===========CODE DELETE RECORD ================

if (isset($_GET['act'])) {
	$act=$_GET['act'];
	if($act=='del'){
	$id = $_GET['id'];
	$sql = "delete from transaksi where noinvoice='$id' ";
	mysql_query($sql) or die(mysql_error());
	$sql = "delete from invoice where noinvoice='$id' ";
	mysql_query($sql) or die(mysql_error());
	}else if($act=='bayar'){
	$id = $_GET['id'];
	$sql = "update  invoice set transfer='1' where noinvoice='$id' ";
	mysql_query($sql) or die(mysql_error());
	//kode untuk mengurangi barang 
	//1. dapatkan idbarang dan jumlah pada transaksi tersebut 
	$sql = "select idproduk,jumlah from transaksi where  noinvoice='$id' ";
	$res=mysql_query($sql) or die(mysql_error());
	while($rows=mysql_fetch_object($res)){
		//2. kurangi barang sejumlah pembelian 
		$query="update stok set jumlah=jumlah - ".$rows->jumlah." where idproduk=".$rows->idproduk;
		mysql_query($query) or die(mysql_error());
	}
	
	
	}else if($act=='kirim'){
	$id = $_GET['id'];
	$sql = "update invoice set tglkirim=now() where noinvoice='$id' ";
	//echo $sql;
	mysql_query($sql) or die(mysql_error());

	}
	

}
?>

<div>
	<h2 id="headings"> Data Barang </h2>
	<!--<a href='index.php?mod=invoice&pg=peta'><i class="icon-map-marker"></i>Map View</a>-->
	<table  class="table table-striped table-condensed">
		<thead>
			<tr align="center" valign="top">  
			  <th width="20">No<td width="66"><b>Nama </b></td>
			<td width="91"><b>Kode Barang</b></td>
			<td width="109"><b>Kendaraan</b></td>
			<td width="108"><b>Elektronik</b></td>
			<td width="83"><b>Fashion</b></td>
			<td width="89"><b>Jasa</b></td>
			<td width="135"><strong>Jumlah Post Barang</strong></td>
			<td width="135"><b>Aksi</b></td><td width="4"></th>
		<td width="4"></thead>
	  <tbody>
<?php
$batas='5';
$tabel="invoice";
$halaman=isset($_GET['halaman']) ? $_GET['halaman'] : '';
$posisi=null;
if(empty($halaman)){
$posisi=0;
$halaman=1;
}else{
$posisi=($halaman-1)* $batas;
}
$query="SELECT invoice.*,pelanggan.nama
 from invoice,pelanggan
 where invoice.idpelanggan=pelanggan.idpelanggan
 limit $posisi,$batas ";
$result=mysql_query($query) or die(mysql_error());
$no=1;
//proses menampilkan data
while($rows=mysql_fetch_object($result)){

			?>
			<tr align="center" valign="top">
			  <td>1.</td>
			  <td>laptop ASUS</td>
			  <td>L1</td>
			  <td>-</td>
			  <td>laptop </td>
			  <td>-</td>
			  <td>-</td>
			  <td>2</td>
			  <td><input type="submit" name="delete2" id="delete2" value="delete" />
		      <input type="submit" name="edit2" id="edit2" value="edit" /></td>
	    </tr>
			<tr align="center" valign="top">
			  <td>2.</td>
			  <td>jasa Les B.ing</td>
			  <td>J4</td>
			  <td>-</td>
			  <td>-</td>
			  <td>-</td>
			  <td>jasa</td>
			  <td>1</td>
			  <td><input type="submit" name="delete3" id="delete3" value="delete" />
		      <input type="submit" name="edit3" id="edit3" value="edit" /></td>
	    </tr>
			<tr align="center" valign="top">
				<td>3.</td>
			
				<td>jaket adidas</td>
			<td>F2</td>
			<td>-</td>
				<td>-</td>
		
			<td>baju</td>
			<td>-</td>
			<td>1</td>
			
				<td>	
					
				<a href="../../batik/backend/invoice/index.php?mod=invoice&amp;pg=invoice_view&amp;act=bayar&amp;id=<?= $rows -> noinvoice; ?>"
				onclick="return confirm('Tandai sudah bayar?') ";
				class='btn btn-success'> <i class="icon-ok"></i></a><a href="../../batik/backend/invoice/index.php?mod=invoice&amp;pg=invoice_view&amp;act=del&amp;id=<?= $rows -> noinvoice; ?>"
				onclick="return confirm('Yakin data akan dihapus?') ";
				class='btn btn-danger'> <i class="icon-trash"></i></a>
				<form id="form1" name="form1" method="post" action="">
				  <label>
				    <input type="submit" name="delete" id="delete" value="delete" />
			      </label>
			      <input type="submit" name="edit" id="edit" value="edit" />
				</form></td>
			</tr>
			<?php $no++;
				}
			?>

			
		</tbody>
	</table>
  <div class='pagination'> </div>
<div class='well'></div>
</div>
