
<?php
include "../koneksi.php";
$tampil="SELECT * FROM cekout ";
$jalantampil=mysql_query($tampil)or die (mysql_error()); 
while($arraytampil=mysql_fetch_array($jalantampil)){
echo "$arraytampil[1]";
echo "$arraytampil[2]";
?>
<br>
<a href="del-cekout.php?id=<?php echo "$arraytampil[0]";?>">delete</a><br />
<?php } ?>