<?php
include "koneksi.php";
$tampil="SELECT * FROM profil ";
$jalantampil=mysql_query($tampil); 
$arraytampil=mysql_fetch_array($jalantampil);
echo "$arraytampil[1]";
?>