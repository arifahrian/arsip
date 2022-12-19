<?php
include "koneksi.php";
$id = $_GET['id'];
?>

<!DOCTYPE html>
<html>
<head>
<title>Edit data</title>
<link rel="icon" type="image/x-icon" href="2.jpg">
<script src="https://kit.fontawesome.com/a18f9b8fbd.js" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="card" style="width: 50rem;">
  <div class="card-header">
  </div>
  <div class="card-body">
    <h2 class="card-title">Edit data</h2>
    <p class="card-text"><?php 
	
	$query ="SELECT * FROM kegiatan WHERE id='$id'";
	$d1=mysqli_query($kon,$query);
    $d  = mysqli_fetch_array($d1);
	?>
	<form action="fromedit1.php" method="post">		
	<input type="hidden" name="id" value="<?php echo $d['id']; ?>" > 
    <label>nama kegiatan : </label>
	<input type="text" name="nama_kegiatan" value="<?php echo $d['nama_kegiatan']; ?>">
	 <br>
	 <label>jenis kegiatan &nbsp;: </label>
	 <input type="text" name="jenis_kegiatan" value="<?php echo $d['jenis_kegiatan']?>">
	 <br>
	 <label>tanggal &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
	 <input type="date" name="tanggal" value="<?php echo $d['tanggal']; ?>">
	 <br>
	 <label>no rak&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </label>
	 <input type="number" name="no_rak" value="<?php echo $d['no_rak']; ?>"><br>

	<button type="submit" class="btn btn-success" name="submit">Submit</button> 
	<a href="halaman.php" class="btn btn-danger">Kembali</a>
    </form></p>
  </div>
</div>
</body>
</html>
<?php
        if (isset($_POST['submit'])) {
            $id       = $_POST['id'];
            $nama_kegiatan = $_POST['nama_kegiatan'];
            $jenis_kegiatan= $_POST['jenis_kegiatan'];
            $tanggal     = $_POST['tanggal'];
			$no_rak     = $_POST['no_rak'];

            $kirim          =  " UPDATE kegiatan
                                SET id='$id',nama_kegiatan='$nama_kegiatan',jenis_kegiatan='$jenis_kegiatan',tanggal='$tanggal',no_rak='$no_rak'
                                  WHERE id='$id'";
            $query            = mysqli_query($kon, $kirim);
            header("location:halaman.php");
        }

        ?>