<?php
        if (isset($_POST['kirim'])) {
            $id       = $_POST['id'];
            $nama_kegiatan = $_POST['nama_kegiatan'];
            $jenis_kegiatan= $_POST['jenis_kegiatan'];
            $tanggal     = $_POST['tanggal'];
			$no_rak     = $_POST['no_rak'];

            $kirim          =  " UPDATE kegiatan
                                SET id='$id',nama_kegiatan='$nama_kegiatan',jenis_kegiatan='$jenis_kegiatan',tanggal='$tanggal',no_rak='$no_rak'
                                  WHERE id='$id'";
            $query            = mysqli_query($konek, $kirim);
            header("location:halaman.php");
        }

        ?>