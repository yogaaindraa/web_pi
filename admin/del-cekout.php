<?php //include "cek_session.php"; ?>
<?php
extract ($_POST);
extract ($_GET);
include"../koneksi.php";
$hapus_data="DELETE FROM cekout WHERE id ='$id'";
$jalan_hapus=mysql_query($hapus_data);
header("location:index.php?menu=cekout");
?>
