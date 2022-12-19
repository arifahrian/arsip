<?php
 include "koneksi.php";
 $query = "select * from kegiatan";
 $result = mysqli_query($kon, $query);
 $row = mysqli_fetch_assoc($result);
 $nama_kegiatan = $row['nama_kegiatan'];
 $jenis_kegiatan = $row['jenis_kegiatan'];
 $tanggal = $row['tanggal'];
 $no_rak = $row['no_rak'];


?>


<!DOCTYPE html>
<html>
<head>
 <title>edit arsip</title>
</head>
<body>
	<h3>bagian edit</h3>
<form action="edit.php" method="POST">
	 <label>nama kegiatan : </label><input type="text" name="nama_kegiatan" value=<?php echo "$nama_kegiatan"?>>
	 <br>
	 <label>jenis kegiatan : </label><input type="text" name="input_jenis_kegiatan" value=<?php echo "$jenis_kegiatan" ?>>
	 <br>
	 <label>tanggal : </label><input type="date" name="input_tanggal" value=<?php echo "$tanggal"?>>
	 <br>
	 <label>no rak : </label><input type="number" name="input_no_rak" value=<?php echo "$no_rak"?>>
	 <br>
 	 <input type="submit" value="simpan"/>
</form>
</body>
<a href="halaman.php">Kembali</a>
</html>