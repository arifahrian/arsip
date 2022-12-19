<?php

include 'koneksi.php';

$id = $_POST['id'];
$nama_kegiatan = $_POST['nama_kegiatan'];
$jenis_kegiatan = $_POST['jenis_kegiatan'];
$tanggal = $_POST['tanggal'];
$no_rak = $_POST['no_rak'];


mysqli_query("UPDATE kegiatan SET nama_kegiatan='$nama_kegiatan', jenis_kegiatan='$jenis_kegiatan', tanggal='$tanggal', no_rak='$no_rak' WHERE id='$id'");

if (mysql_query) {
?>
    <script type="text/javascript">
        alert("Update Data Berhasil.");
        window.location = 'halaman.php';
    </script>
<?php
} else {
?>
    <script type="text/javascript">
        alert("Update Data Gagal");
        window.location = 'halaman.php';
    </script>
<?php

}
