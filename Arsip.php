<?php
include "koneksi.php";

if(isset($_POST["submit"])) { 

$nama_kegiatan =$_POST["nama_kegiatan"];
$jenis_kegiatan =$_POST["jenis_kegiatan"];
$tanggal =$_POST["tanggal"];
$no_rak =$_POST["no_rak"];

	  $query="insert into kegiatan values(null, '$nama_kegiatan','$jenis_kegiatan','$tanggal','$no_rak')";	
	  $hasil=mysqli_query($kon,$query);
	  if ($query) {
		?>
			<script type="text/javascript">
				alert("Tambah Data Berhasil.");
				window.location = 'halaman.php';
			</script>
		<?php
		} else {
		?>
			<script type="text/javascript">
				alert("Tambah Data Gagal");
				window.location = 'halaman.php';
			</script>
		<?php
		}
}  

?>