<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data Arsip.xls");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Export to Excel</title>
</head>

<body>
    <center>
        <h2>Data Arsip</h2>
    </center>

    <?php
    include 'koneksi.php'
    ?>
    <table border="1" style="width: 100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kegiatan</th>
                <th>Jenis Kegiatan</th>
                <th>Tanggal</th>
                <th>No Rak</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $ambilsemuadata = mysqli_query($kon, "select * from kegiatan");
            $i = 1;
            while ($row = mysqli_fetch_array($ambilsemuadata)) {
                $nama_kegiatan = $row['nama_kegiatan'];
                $jenis_kegiatan = $row['jenis_kegiatan'];
                $tanggal = $row['tanggal'];
                $no_rak= $row['no_rak'];
            ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $row['nama_kegiatan'] ?></td>
                    <td><?php echo $row['jenis_kegiatan'] ?></td>
                    <td><?php echo $row['tanggal'] ?></td>
                    <td><?php echo $row['no_rak'] ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <script>
        window.print()
    </script>

</body>

</html>