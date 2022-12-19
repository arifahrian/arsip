<!DOCTYPE html>
<html>
<head>
<title>Form Arsip</title>
<link rel="icon" type="image/x-icon" href="2.jpg">
<script src="https://kit.fontawesome.com/a18f9b8fbd.js" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="card" style="width: 50rem;">
  <div class="card-body">
  </div>
  <div class="card-body">
    <h2 class="card-title">TAMBAH DATA ARSIP</h2>
    <p class="card-text"><form action="Arsip.php" method="post">
	<table>
          <tr>
              <td>Nama Kegiatan</td><td><input type="text" name="nama_kegiatan"/></td>
	  </tr>
	  <tr>
            <td>Jenis Kegiatan</td><td><input type="text" name="jenis_kegiatan"/></td>
	      
	  </tr>
	  <tr>
            <td>Tanggal</td><td><input type="date" name="tanggal"/></td>
	  </tr>
	  <tr>
            <td>No Rak</td><td><input type="text" name="no_rak"/></td>
	  </tr>
	</table>
    <button type="submit" class="btn btn-success" name="submit">Submit</button> 
	<a href="halaman.php" class="btn btn-danger">Kembali</a>
    </form></p>

  </div>
</div>

    
</body>
</html>