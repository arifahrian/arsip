<?php 
include 'koneksi.php';
mysql_query("DELETE FROM kegiatan")or die(mysql_error());

header("location:halaman.php?pesan=hapus");
?>