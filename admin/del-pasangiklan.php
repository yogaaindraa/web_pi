<?php //include "cek_session.php"; ?>
<?php
extract ($_POST);
extract ($_GET);
include"../koneksi.php";
$hapus_data="DELETE FROM pasangiklan WHERE noid ='$noid'";
$jalan_hapus=mysql_query($hapus_data);
header("location:index_admin.php?menu=pasangiklan");
?>
