<!DOCTYPE html>
<html>
<head>
	<title>Data Pengarsipan</title>
	<link rel="icon" type="image/x-icon" href="2.jpg">
	<script src="https://kit.fontawesome.com/a18f9b8fbd.js" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body><center><br><br>
<div class="card" style="width: 60rem;">
  <div class="card-body">
    <h2 class="card-title">DATA-DATA PENGARSIPAN</h2>
<hr>
    <a href="formarsip.php" class="btn btn-primary">
                    <i class="fas fa-user-plus    "></i>
                    Tambah Data
                  </a>
				  <a href="excel.php" class="btn btn-success" title="Export Excel">
                      <i class="fas fa-file-excel    "></i>
                    </a>
	<br/>
	<br/>
	<form class="navbar-form" method="post">
              <div class="input-group no-border">
                <input type="text" class="form-control" placeholder="Search..." name="query">
                <button type="submit" name="cari" class="btn btn-white btn-round btn-just-icon"> <i class="fas fa-search-plus"></i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
	<table class="table table-striped">
		<tr>
			<th>NO</th>
			<th>Nama Kegiatan</th>
			<th>Jenis Kegiatan</th>
			<th>Tanggal</th>
			<th>No Rak</th>
			<th>OPSI</th>
		</tr>
		<?php 
		error_reporting(0);
		 $query = $_POST['query'];
		 if ($query != '') {
		   $sql2   = "select * from kegiatan WHERE nama_kegiatan LIKE '" . $query . "'";
		 } else {
		   $sql2   = "select * from kegiatan order by id desc";
		 }

		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($kon,$sql2);
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama_kegiatan']; ?></td>
				<td><?php echo $d['jenis_kegiatan']; ?></td>
				<td><?php echo $d['tanggal']; ?></td>
				<td><?php echo $d['no_rak']; ?></td>
				<td>
				<a class="dropdown-item" href="fromedit1.php?id=<?php echo $d['id']; ?>">
                                    <i class="fas fa-edit    "></i>
                                    Edit
                                  </a>
								  <a class="dropdown-item" href="hapus1.php?id=<?php echo $d['id']; ?>"onclick="return confirm('Anda yakin mau menghapus item ini ?')">
                                    <i class="fas fa-trash    "></i>
                                    Delete
                                  </a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table></p>
    
  </div>
</div>
	
</body>
</html>