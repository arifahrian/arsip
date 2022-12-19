<?php 
include 'koneksi.php';
$id = $_GET['id'];
$query = mysqli_query($kon, "DELETE FROM kegiatan WHERE id='$id'")or die(mysql_error());
if ($query) {
    ?>
        <script type="text/javascript">
            alert("Hapus Data Berhasil.");
            window.location = 'halaman.php';
        </script>
    <?php
    } else {
    ?>
        <script type="text/javascript">
            alert("Hapus Data Gagal");
            window.location = 'halaman.php';
        </script>
    <?php
    
    }
    
?>