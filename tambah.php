<?php

include 'koneksi.php';

		$nama_kegiatan = $_POST['nama_kegiatan'];
		$jenis_kegiatan = $_POST['jenis_kegiatan'];
		$tanggal = $_POST['tanggal'];
		$nomor_rak = $_POST['no_rak'];

$query = mysqli_query("INSERT INTO kegiatan VALUES('','$nama_kegiatan','$jenis_kegiatan','$tanggal','$no_rak')");
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

?>