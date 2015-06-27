
<?php
include "../koneksi.php";

$data="select * from pasangiklan";
$tampil=mysql_query($data);
while($array=mysql_fetch_array($tampil)){
?>

<?php  echo "$array[1]";  ?>
<?php }?>